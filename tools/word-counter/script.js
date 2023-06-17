const count = document.querySelector("#count");
const countButton = document.querySelector("#countButton");

function countWords() {
  const text = document.querySelector("#text").value.trim();
  const search = document.querySelector("#searchWord").value.trim();
  const caseCheck = document.querySelector("#case").checked;

  if (!text) return (count.textContent = "00");

  const regex = new RegExp(
    search ? `\\b${search}\\b` : "\\S+",
    caseCheck ? "g" : "gi"
  );

  const matches = text.match(regex) || [];
  const wordCount = matches.length;

  const formattedWordCount = wordCount.toString().padStart(2, "0");
  count.textContent = formattedWordCount;
}
