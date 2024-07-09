@props(['job'])

<x-panel class="flex gap-x-6">
    <div>

        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-gray-400">Laracasts</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-600">Backend developer
        </h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time -from $120,000</p>

    </div>



    <div>
        @foreach ($job->tags as $tag)

            <x-tag :$tag>Backend</x-tag>
        @endforeach


    </div>


</x-panel>