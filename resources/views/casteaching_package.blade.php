<x-casteaching-layout>
    <script>
        window.axios.get('http://casteaching.test/api/videos').then(function (data){
            console.log(data)
        }).catch(function (err){
            console.log(err)
        })
    </script>
</x-casteaching-layout>
