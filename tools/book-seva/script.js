const sellBooksSection = getDocument("sellBooksSection");
const returnBooksSection = getDocument("returnBooksSection");
const bookRow = getDocument("bookRow1");

function getDocument(id) {
  return document.getElementById(id);
}

function addMore() {
  const bookRowClone = bookRow.cloneNode(true); // Clone the entire node, including its contents
  bookRowClone.id = "bookRow2"; // Update the ID to a unique value
  sellBooksSection.appendChild(bookRowClone); // Append the cloned element to sellBooksSection
}
