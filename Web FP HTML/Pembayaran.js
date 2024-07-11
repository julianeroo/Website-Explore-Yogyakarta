let adultCount = 0;
let childCount = 0;
let infantCount = 0;

// Menambahkan event listener untuk tombol plus dan minus
document.querySelector(".plus").addEventListener("click", incrementAdult);
document.querySelector(".minus").addEventListener("click", decrementAdult);

document.querySelector(".plus1").addEventListener("click", incrementChild);
document.querySelector(".minus1").addEventListener("click", decrementChild);

document.querySelector(".plus2").addEventListener("click", incrementInfant);
document.querySelector(".minus2").addEventListener("click", decrementInfant);

// Event listener untuk input date dan time
document
  .querySelector('input[type="date"]')
  .addEventListener("change", updateDateTimeOverview);
document
  .querySelector('input[type="time"]')
  .addEventListener("change", updateDateTimeOverview);

// Function to update overview date & time
function updateDateTimeOverview() {
  const date = document.querySelector('input[type="date"]').value;
  const time = document.querySelector('input[type="time"]').value;

  if (date && time) {
    // Memperbarui overview package
    document.getElementById("overview-package").textContent = "Package Bronze";
    document.getElementById("overview-date").textContent = date;
    document.getElementById("overview-time").textContent = time;
  }
}

function updateTotalOverview() {
  var adultQty = parseInt(
    document.getElementById("overview-adult-qty").textContent
  );
  var adultPrice = parseFloat(
    document.getElementById("overview-adult-price").textContent.slice(1)
  );
  var childQty = parseInt(
    document.getElementById("overview-child-qty").textContent
  );
  var childPrice = parseFloat(
    document.getElementById("overview-child-price").textContent.slice(1)
  );
  var infantQty = parseInt(
    document.getElementById("overview-infant-qty").textContent
  );
  var total = adultPrice + childPrice;

  // Update total harga pada overview
  document.getElementById("overview-total").textContent =
    "$" + total.toFixed(2);

  // Update hidden input with total price
  document.getElementById("hidden_total_harga").value = total.toFixed(2);
}

// Adult
function incrementAdult() {
  adultCount++;
  updateAdultOverview();
}

function decrementAdult() {
  if (adultCount > 0) {
    adultCount--;
    updateAdultOverview();
  }
}

function updateAdultOverview() {
  document.querySelector(".num").textContent =
    adultCount < 10 ? "0" + adultCount : adultCount;

  let overviewAdultQty = document.getElementById("overview-adult-qty");
  overviewAdultQty.textContent =
    adultCount < 10 ? "0" + adultCount : adultCount;
  overviewAdultQty.style.margin = ""; // menghapus margin
  overviewAdultQty.style.padding = ""; // menghapus padding

  let overviewAdultPrice = document.getElementById("overview-adult-price");
  overviewAdultPrice.textContent = "$" + (adultCount * 34).toFixed(2);
  overviewAdultPrice.style.margin = ""; // menghapus margin
  overviewAdultPrice.style.padding = ""; // menghapus padding

  updateTotalOverview(); // Memanggil update total setelah perubahan
  updateDateTimeOverview(); // Memanggil update date & time setelah perubahan
}

// Child
function incrementChild() {
  childCount++;
  updateChildOverview();
}

function decrementChild() {
  if (childCount > 0) {
    childCount--;
    updateChildOverview();
  }
}

function updateChildOverview() {
  document.querySelector(".num1").textContent =
    childCount < 10 ? "0" + childCount : childCount;

  let overviewChildQty = document.getElementById("overview-child-qty");
  overviewChildQty.textContent =
    childCount < 10 ? "0" + childCount : childCount;
  overviewChildQty.style.margin = ""; // menghapus margin
  overviewChildQty.style.padding = ""; // menghapus padding

  let overviewChildPrice = document.getElementById("overview-child-price");
  overviewChildPrice.textContent = "$" + (childCount * 22).toFixed(2);
  overviewChildPrice.style.margin = ""; // menghapus margin
  overviewChildPrice.style.padding = ""; // menghapus padding

  updateTotalOverview(); // Memanggil update total setelah perubahan
  updateDateTimeOverview(); // Memanggil update date & time setelah perubahan
}

// Infant
function incrementInfant() {
  infantCount++;
  updateInfantOverview();
}

function decrementInfant() {
  if (infantCount > 0) {
    infantCount--;
    updateInfantOverview();
  }
}

function updateInfantOverview() {
  document.querySelector(".num2").textContent =
    infantCount < 10 ? "0" + infantCount : infantCount;

  let overviewInfantQty = document.getElementById("overview-infant-qty");
  overviewInfantQty.textContent =
    infantCount < 10 ? "0" + infantCount : infantCount;
  overviewInfantQty.style.margin = ""; // menghapus margin
  overviewInfantQty.style.padding = ""; // menghapus padding

  let overviewInfantPrice = document.getElementById("overview-infant-price");
  overviewInfantPrice.textContent = "Free";
  overviewInfantPrice.style.margin = ""; // menghapus margin
  overviewInfantPrice.style.padding = ""; // menghapus padding

  updateTotalOverview(); // Memanggil update total setelah perubahan
  updateDateTimeOverview(); // Memanggil update date & time setelah perubahan
}

// Total

function goToNextStep() {
  const date = document.querySelector('input[type="date"]').value;
  const time = document.querySelector('input[type="time"]').value;

  if (date && time) {
    // Memperbarui overview package
    document.getElementById("overview-package").textContent = "Package Bronze";
    document.getElementById("overview-date").textContent = date;
    document.getElementById("overview-time").textContent = time;

    // Memperbarui quantity dan harga
    // Adult
    let overviewAdultQty = document.getElementById("overview-adult-qty");
    overviewAdultQty.textContent =
      adultCount < 10 ? "0" + adultCount : adultCount;
    let overviewAdultPrice = document.getElementById("overview-adult-price");
    overviewAdultPrice.textContent = "$" + (adultCount * 34).toFixed(2);

    // Child
    let overviewChildQty = document.getElementById("overview-child-qty");
    overviewChildQty.textContent =
      childCount < 10 ? "0" + childCount : childCount;
    let overviewChildPrice = document.getElementById("overview-child-price");
    overviewChildPrice.textContent = "$" + (childCount * 22).toFixed(2);

    //Infant
    let overviewInfantQty = document.getElementById("overview-infant-qty");
    overviewInfantQty.textContent =
      infantCount < 10 ? "0" + infantCount : infantCount;
    let overviewInfantPrice = document.getElementById("overview-infant-price");
    overviewInfantPrice.textContent = "Free";
  } else {
    alert("Please select a date and time");
  }
}
