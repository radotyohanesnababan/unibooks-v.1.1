const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal = document.getElementById("modal");

<<<<<<< HEAD
        // JavaScript to handle modal open and close
        const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('modal');
    const editIndexInput = document.getElementById('editIndex');

    openModalBtn.addEventListener('click', () => {
    // Reset form fields
    document.getElementById('addBookForm').reset();
    // Clear editIndex input
    editIndexInput.value = '';
    modal.classList.remove('hidden');
});

closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});

// Close modal when clicking outside of the modal
window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.classList.add('hidden');
    }
});

    // Handle form submission
    document.getElementById('addBookForm').addEventListener('submit', (event) => {
        event.preventDefault();

        // Get form data
        const judul = document.getElementById('judul').value;
        const penulis = document.getElementById('penulis').value;
        const penerbit = document.getElementById('penerbit').value;
        const tahun_terbit = document.getElementById('tahun_terbit').value;
        const genre = document.getElementById('genre').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const stok = document.getElementById('stok').value;
        const isbn = document.getElementById('isbn').value;
        const editIndex = editIndexInput.value;

        // Add new row to the table
        const tableBody = document.getElementById('booksTableBody');

        if (editIndex) {
            // If editing, update the existing row
            const row = tableBody.children[editIndex];
            row.children[0].innerText = judul;
            row.children[1].innerText = penulis;
            row.children[2].innerText = penerbit;
            row.children[3].innerText = tahun_terbit;
            row.children[4].innerText = genre;
            row.children[5].innerText = deskripsi;
            row.children[6].innerText = stok;
            row.children[7].innerText = isbn;
        } else {
            // If not editing, create a new row
            const newRow = document.createElement('tr');
            newRow.classList.add('border-b', 'border-gray-200', 'dark:border-gray-700');
            newRow.innerHTML = `
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${judul}</th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${penulis}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${penerbit}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${tahun_terbit}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${genre}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${deskripsi}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${stok}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${isbn}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
                    <button class="text-blue-600 hover:text-blue-800 edit-button" onclick="editBook(this)">
                        <svg class="w-6 h-6 text-blue-600 hover:text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                        </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-button" onclick="deleteBook(this)">
                        <svg class="w-6 h-6 text-red-600 hover:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                    </button>
                </td>
            `;
            tableBody.appendChild(newRow);
        }

        // Clear the form and hide modal
        document.getElementById('addBookForm').reset();
        editIndexInput.value = '';
        modal.classList.add('hidden');
    });

    // Function to delete a book
    function deleteBook(button) {
        const row = button.closest('tr');
        row.remove();
    }

    // Function to edit a book
    function editBook(button) {
        const row = button.closest('tr');
        const editIndex = Array.from(row.parentNode.children).indexOf(row);
        editIndexInput.value = editIndex;

        const judul = row.children[0].innerText;
        const penulis = row.children[1].innerText;
        const penerbit = row.children[2].innerText;
        const tahun_terbit = row.children[3].innerText;
        const genre = row.children[4].innerText;
        const deskripsi = row.children[5].innerText;
        const stok = row.children[6].innerText;
        const isbn = row.children[7].innerText;

        document.getElementById('judul').value = judul;
        document.getElementById('penulis').value = penulis;
        document.getElementById('penerbit').value = penerbit;
        document.getElementById('tahun_terbit').value = tahun_terbit;
        document.getElementById('genre').value = genre;
        document.getElementById('deskripsi').value = deskripsi;
        document.getElementById('stok').value = stok;
        document.getElementById('isbn').value = isbn;

        modal.classList.remove('hidden');
    }
=======
const openModalEditBtn = document.getElementById("openModalEditBtn");
const closeModalEditBtn = document.getElementById("closeModalEditBtn");
const modalEdit = document.getElementById("modalEdit");

function clearForm(formId) {
  const form = document.getElementById(formId);
  form.reset();
}

openModalEditBtn.addEventListener("click", () => {
  modalEdit.classList.remove("hidden");
});

window.addEventListener("click", (event) => {
  if (event.target == modal) {
    modal.classList.add("hidden");
  } else if (event.target == modalEdit) {
    modalEdit.classList.add("hidden");
  }
});
document.getElementById("editBookForm").addEventListener("submit", (event) => {
  modal.classList.add("hidden");
});

closeModalEditBtn.addEventListener("click", () => {
  modalEdit.classList.add("hidden");
});

openModalBtn.addEventListener("click", () => {
  clearForm("addBookForm");
  modal.classList.remove("hidden");
});
window.addEventListener("click", (event) => {
  if (event.target == modalEdit) {
    modalEdit.classList.add("hidden");
  }
});

document.getElementById("addBookForm").addEventListener("submit", (event) => {
  // Get form data
  const judul = document.getElementById("judul").value;
  const penulis = document.getElementById("penulis").value;
  const nama_penerbit = document.getElementById("nama_penerbit").value;
  const tahun_terbit = document.getElementById("tahun_terbit").value;
  const genre = document.getElementById("genre").value;
  const deskripsi = document.getElementById("deskripsi").value;
  const stok = document.getElementById("stok").value;
  const isbn = document.getElementById("isbn").value;

  // Add new row to the table
  const tableBody = document.getElementById("booksTableBody");
  const newRow = document.createElement("tr");
  newRow.classList.add("border-b", "border-gray-200", "dark:border-gray-700");
  newRow.innerHTML = `
      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${judul}</th>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${penulis}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${tahun_terbit}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${nama_penerbit}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${genre}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${deskripsi}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${stok}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">${isbn}</td>
      <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:bg-gray-200">
          <button class="text-blue-600 hover:text-blue-800" onclick="editBook(this)">Edit</button>
          <button class="text-red-600 hover:text-red-800" onclick="deleteBook(this)">Delete</button>
      </td>
  `;
  tableBody.appendChild(newRow);

  // Clear the form
  clearForm("addBookForm");

  // Hide the modal
  modal.classList.add("hidden");
});

// Event listener untuk buka modal edit data
function editBook(button) {
  const row = button.closest("tr");
  const judul = row.children[0].innerText;
  const penulis = row.children[2].innerText;
  const nama_penerbit = row.children[3].innerText;
  const tahun_terbit = row.children[4].innerText;
  const genre = row.children[5].innerText;
  const deskripsi = row.children[6].innerText;
  const stok = row.children[7].innerText;
  const isbn = row.children[8].innerText;

  document.getElementById("judul").value = judul;
  document.getElementById("penulis").value = penulis;
  document.getElementById("penerbit").value = nama_penerbit;
  document.getElementById("tahun_terbit").value = tahun_terbit;
  document.getElementById("genre").value = genre;
  document.getElementById("deskripsi").value = deskripsi;
  document.getElementById("stok").value = stok;
  document.getElementById("isbn").value = isbn;

  // Tampilkan modal edit
  modalEdit.classList.remove("hidden");
}
closeModalBtn.addEventListener("click", () => {
  modal.classList.add("hidden");
});
>>>>>>> f0e568f (update fix update& cancel func)
