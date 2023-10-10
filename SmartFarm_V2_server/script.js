// const rangeInput1 = document.getElementById("customRange1");
// const outputElement1 = document.getElementById("output1");

// const rangeInput2 = document.getElementById("customRange2");
// const outputElement2 = document.getElementById("output2");

// // Retrieve the saved values from localStorage if they exist
// const savedValue1 = localStorage.getItem("rangeValue1");
// const savedValue2 = localStorage.getItem("rangeValue2");
// if (savedValue1) {
//     rangeInput1.value = savedValue1;
//     outputElement1.textContent = savedValue1;
// }
// if (savedValue2) {
//     rangeInput2.value = savedValue2;
//     outputElement2.textContent = savedValue2;
// }

// rangeInput1.addEventListener("input", function() {
//     const value = rangeInput1.value;
//     outputElement1.textContent = value;

//     // Save the value to localStorage
//     localStorage.setItem("rangeValue1", value);
// });

// rangeInput2.addEventListener("input", function() {
//     const value = rangeInput2.value;
//     outputElement2.textContent = value;

//     // Save the value to localStorage
//     localStorage.setItem("rangeValue2", value);
// });
  const rangeInputs = document.querySelectorAll(".form-range");
  const outputElements = document.querySelectorAll("p[id^='output']");

  // Save the values to localStorage when the page is unloaded
  window.onbeforeunload = function() {
    rangeInputs.forEach((rangeInput, index) => {
      const value = rangeInput.value;
      localStorage.setItem(`rangeValue${index + 1}`, value);
    });
  };

  // Retrieve the saved values from localStorage if they exist
  rangeInputs.forEach((rangeInput, index) => {
    const savedValue = localStorage.getItem(`rangeValue${index + 1}`);
    if (savedValue) {
      rangeInput.value = savedValue;
      outputElements[index].textContent = savedValue;
    }

    rangeInput.addEventListener("input", function() {
      const value = rangeInput.value;
      outputElements[index].textContent = value;

      // Save the value to localStorage
      localStorage.setItem(`rangeValue${index + 1}`, value);
    });
  });

