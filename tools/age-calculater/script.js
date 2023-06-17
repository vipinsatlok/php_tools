async function ageCalculate() {
  const birthDateInput = document.getElementById("birthDate").value;
  const endDateInput = document.getElementById("endDate").value;
  const result = document.getElementById("result");
  const years = document.getElementById("years");
  const months = document.getElementById("months");
  const days = document.getElementById("days");
  const age = document.getElementById("age");
  const button = document.getElementById("calculateButton");
  const buttonHtml = button.innerHTML;
  const loading = `<svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-2 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
  </svg>`;

  button.innerHTML = loading + "Calculating...";

  function parseDate(input) {
    const parts = input.split(/[-/]/);
    if (parts.length !== 3) {
      return null;
    }
    const [year, month, day] = parts;

    const rearrangedDate =
      parts[0].length === 4
        ? `${year}-${month.padStart(2, "0")}-${day.padStart(2, "0")}`
        : `${year.padStart(2, "0")}-${month.padStart(2, "0")}-${day.padStart(
            2,
            "0"
          )}`;

    return rearrangedDate;
  }

  const birthDate = parseDate(birthDateInput);
  let endDate = endDateInput ? parseDate(endDateInput) : null;

  if (!birthDate) {
    button.innerHTML = buttonHtml;
    result.style.display = "none";
    return console.log("birth date required");
  }

  if (!endDate) {
    const currentDate = new Date();
    endDate = `${currentDate.getFullYear()}-${(currentDate.getMonth() + 1)
      .toString()
      .padStart(2, "0")}-${currentDate.getDate().toString().padStart(2, "0")}`;
  }

  try {
    const response = await fetch("./age-calculater/api.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        birthDate: birthDate,
        endDate: endDate,
      }),
    });

    if (!response.ok) {
      return console.log("something wrong");
    }

    const data = await response.json();
    if (data?.result?.years) {
      age.textContent = "🎉 Your age is " + data.result.years + " Years";
    } else if (data?.result?.months) {
      age.textContent = "🎉 Your age is " + data.result.months + " Months";
    } else {
      age.textContent = "🎉 Your age is " + data.result.days + " Days";
    }

    result.style.display = "block";
    years.textContent = data.result.years;
    months.textContent = data.result.months;
    days.textContent = data.result.days;
    button.innerHTML = buttonHtml;
  } catch (error) {
    result.style.display = "none";
    button.innerHTML = buttonHtml;
    return console.log(error);
  }
}
