#include <Arduino.h>
#include <WiFi.h>
#include <HTTPClient.h>

class ServerCommunicator {
private:
  const char *ssid;
  const char *password;
  const char *serverUrl;

public:
  ServerCommunicator(const char *wifiSsid, const char *wifiPassword, const char *url) {
    ssid = wifiSsid;
    password = wifiPassword;
    serverUrl = url;
  }
  void connectToWiFi() {
    WiFi.begin(ssid, password);
    Serial.println("Connecting to " + String(ssid));
    while (WiFi.status() != WL_CONNECTED) {
      Serial.print(".");
      delay(500);
    }
    Serial.println("Connected!!!");
  }

  int *split(String str, String until) {
    int count = 0;
    for (int i = 0; i < str.length(); i++) {
      if (String(str[i]) == until) {
        count++;
      }
    }
    // Serial.println(count);
    int *data_arr = new int[count];
    // int data_arr[count];
    String result = "";
    int indexOfArray = 0;
    for (int i = 0; i < str.length(); i++) {
      if (String(str[i]) == until) {
        data_arr[indexOfArray] = result.toInt();
        indexOfArray++;
        result = "";
      } else {
        result += str[i];
      }
    }
    return data_arr;
  }

  void sendDataToServer(String endpoint, const String &data) {
    // Create an HTTPClient object
    HTTPClient http;

    // Build the URL with the server, endpoint, and data
    String url = String(serverUrl) + String(endpoint) + "?" + data;

    // Send a GET request
    http.begin(url);
    // Perform the GET request and get the response
    int httpResponseCode = http.GET();

    // Check if the request was successful
    if (httpResponseCode > 0) {
      String response = http.getString();
    } else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }

    // Close the connection
    http.end();
  }

  String httpRequest(String endpoint) {
    WiFiClient client;
    HTTPClient http;

    // Specify the server and path for the GET request
    http.begin(client, String(serverUrl) + endpoint);

    // Send the GET request
    int httpResponseCode = http.GET();

    String responsePayload;

    if (httpResponseCode > 0) {
      responsePayload = http.getString();
    } else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }

    http.end();
    return responsePayload;
  }
};

const char* ssid = "Petch wifi";
const char* password = "12345678";

const char *serverUrl = "http://192.168.1.41/SmartFarm_08092023/";
// const char* endpoint = "/path";

ServerCommunicator server(ssid, password, serverUrl);

unsigned long theEndOfTime = 0;
int *data;
int mode, temp_min, temp_max, hum_min, hum_max, timer, fan, pum;
int temp, hum;
void setup() {
  Serial.begin(115200);
  server.connectToWiFi();
}

void loop() {
  if (millis() - theEndOfTime > 5000) {
    theEndOfTime = millis();
    server.sendDataToServer("back_end.php", "temp=" + String(temp) + "&humidity=" + String(hum));
    data = server.split(server.httpRequest("base_mode.php") + server.httpRequest("base_setting.php") + server.httpRequest("base_switch.php"), "_");
    mode = data[0];
    temp_min = data[1];
    temp_max = data[2];
    hum_min = data[3];
    hum_max = data[4];
    timer = data[5];
    fan = data[6];
    pum = data[7];
  }
}
