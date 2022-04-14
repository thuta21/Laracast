<x-Layout>
        <x-Hero />
        <x-Blog-Section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory??null"/>
        <x-Subscribe />
</x-Layout>
    

