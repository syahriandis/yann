<x-app title="Program Latihan">
   <!-- Content List -->
   <div class="space-y-4">
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Senin, 8 April 2025</p>
            <p class="text-sm">Latihan Bahu</p>
          </div>
          <button onclick="showLatihanDetail('bahu')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>

        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Selasa, 9 April 2025</p>
            <p class="text-sm">Kardio</p>
          </div>
          <button onclick="showLatihanDetail('kardio')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>

        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Rabu, 10 April 2025</p>
            <p class="text-sm">Latihan Perut</p>
          </div>
          <button onclick="showLatihanDetail('perut')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="latihanModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl relative">
      <button onclick="toggleLatihanModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
      <div id="latihanContent"></div>
      <div class="flex justify-between mt-4">
        <button onclick="toggleLatihanModal()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Kembali</button>
        <button onclick="showNoteInput()" class="bg-green-500 text-white px-4 py-2 rounded">Done</button>
      </div>
      <div id="noteSection" class="mt-4 hidden">
        <label class="block mb-2 font-semibold">Catatan Latihan:</label>
        <textarea class="w-full border p-2 rounded mb-2" placeholder="Tulis bagaimana latihannya..."></textarea>
        <button onclick="latihanSelesai()" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script>

function toggleProfile() {
      const popup = document.getElementById('profilePopup');
      popup.classList.toggle('hidden');
    }

    // Klik di luar pop-up untuk menutup
    window.addEventListener('click', function(e) {
      const popup = document.getElementById('profilePopup');
      const button = e.target.closest('button');
      if (!popup.contains(e.target) && !button) {
        popup.classList.add('hidden');
      }
    });
    
    function toggleLatihanModal() {
      const modal = document.getElementById("latihanModal");
      modal.classList.toggle("hidden");
      document.getElementById("noteSection").classList.add("hidden");
    }

    function showNoteInput() {
      document.getElementById("noteSection").classList.remove("hidden");
    }

    function latihanSelesai() {
      const note = document.querySelector('#noteSection textarea').value;
      alert("Latihan selesai!\nCatatan: " + note);
      toggleLatihanModal();
    }

    function showLatihanDetail(type) {
      const content = {
        bahu: `
          <h3 class="text-2xl font-bold mb-4">🏋️‍♂️ Latihan Bahu</h3>
          <ol class="list-decimal list-inside">
            <li>Angkat dumbbell ke samping setinggi bahu</li>
            <li>Turunkan perlahan dan ulangi 3 set</li>
            <li>Istirahat 30 detik tiap set</li>
          </ol>
        `,
        kardio: `
          <h3 class="text-2xl font-bold mb-4">🏃‍♂️ Kardio</h3>
          <ol class="list-decimal list-inside">
            <li>Lari di tempat selama 3 menit</li>
            <li>Jumping jack 2 menit</li>
            <li>High knees 2 menit</li>
          </ol>
        `,
        perut: `
          <h3 class="text-2xl font-bold mb-4">🧘‍♀️ Latihan Perut</h3>
          <ol class="list-decimal list-inside">
            <li>30x sit-up</li>
            <li>Plank 1 menit</li>
            <li>Leg raises 15x</li>
          </ol>
        `
      };

      document.getElementById("latihanContent").innerHTML = content[type];
      toggleLatihanModal();
    }
  </script>`
</x-app>
