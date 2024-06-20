
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('modal');

    openModalBtn.addEventListener('click', () => {
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
        

        // Get form data
        const judul = document.getElementById('judul').value;
        const penulis = document.getElementById('penulis').value;
        const nama_penerbit = document.getElementById('nama_penerbit').value;
        const tahun_terbit = document.getElementById('tahun_terbit').value;
        const genre = document.getElementById('genre').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const stok = document.getElementById('stok').value;
        const isbn = document.getElementById('isbn').value;

        // Add new row to the table
        const tableBody = document.getElementById('booksTableBody');
        const newRow = document.createElement('tr');
        newRow.classList.add('border-b', 'border-gray-200', 'dark:border-gray-700');
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
        document.getElementById('addBookForm').reset();

        // Hide the modal
        modal.classList.add('hidden');
    });

    // Function to delete a book
    function deleteBook(button) {
        const id_buku = button.getAttribute('id_buku');

        fetch (`/books/${id_buku}`),{
            method : 'DELETE',
            headers:{
                
            }
        }
    }
    

    // Function to edit a book
    function editBook(button) {
        const row = button.closest('tr');
        const judul = row.children[0].innerText;
        const penulis = row.children[1].innerText;
        const nama_penerbit = row.children[2].innerText;
        const tahun_terbit = row.children[3].innerText;
        const genre = row.children[4].innerText;
        const deskripsi = row.children[5].innerText;
        const stok = row.children[6].innerText;
        const isbn = row.children[7].innerText;

        // Open modal with pre-filled data
        openModalBtn.click();
        document.getElementById('judul').value = judul;
        document.getElementById('penulis').value = penulis;
        document.getElementById('nama_penerbit').value = nama_penerbit;
        document.getElementById('tahun_terbit').value = tahun_terbit;
        document.getElementById('genre').value = genre;
        document.getElementById('deskripsi').value = deskripsi;
        document.getElementById('stok').value = stok;
        document.getElementById('isbn').value = isbn;

        // Remove the old row after editing
        row.remove();
    }