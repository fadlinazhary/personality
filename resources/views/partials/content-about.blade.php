<section class="px-10 mt-3 flex flex-col md:flex-row min-h-screen items-center justify-normal md:justify-around dark:text-white">
    <div>
        <h1 class="text-3xl font-semibold">About the Author (Fadlin Azhary)</h1>
        <ul class="list-disc p-4">
            <li class="py-1">A web developer from Bengkalis Regency, Riau, Indonesia</li>
            <li class="py-1">Currently learning Laravel, WordPress, and NextJS</li>
            <li class="py-1">An Arch Linux user!</li>
        </ul>
    </div>
    <div>
        <img src="@asset('images/profile-image.jpg')" class="w-96 h-96 object-cover rounded-lg shadow-md" alt="">
    </div>
</section>
<section id="portofolio" class="p-5">
    <h1 class="text-3xl font-semibold">What I've Built</h1>
    <div id="image-gallery" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl p-3">
            <img src="{{ asset('images/portofolio-shipmon.png') }}" class="w-full h-48 object-cover" alt="Gallery Image">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Shipmon</h3>
                <p class="text-gray-600">A ship construction management system using Laravel and Chart.js</p>
            </div>
        </div>
    </div>    
</section>