@props(['job'])

<x-panel class="flex flex-col text-center">

    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl transition-colors duration-600">Backend developer</h3>
        <p class="text-sm mt-4">Full Time -from $120,000</p>
    </div>
    <div class="flex justify-between items-center">

        <div>
            @foreach ($job->$tags as $tag)

                <x-tag :$tag size="small">Backend</x-tag>
            @endforeach

        </div>
        <x-employer-logo :width="42" />
    </div>

</x-panel>