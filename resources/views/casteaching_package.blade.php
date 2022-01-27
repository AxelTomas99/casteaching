<x-casteaching-layout>
    <button id="getVideos" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        GET VIDEOS
    </button>

    <script>
        document.getElementById('getVideos').addEventListener('click',async function (){
            console.log('rpova');
            try {
                const videos = await window.axeltomas_casteaching.videos()
                console.log(videos)
            } catch (error) {
                console.log('ERROR:');
                console.log(error);
            }
        })
    </script>
</x-casteaching-layout>
