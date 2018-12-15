<table class="table table-hover mb-0">
    <caption class="pb-0">
        {{ $result[$entityGroup]->count() }} {{ str_plural(str_singular($entityGroup), $result[$entityGroup]->count()) }} found
    </caption>
    <colgroup>
        <col>
        <col width="100">
        <col width="100">
    </colgroup>
    <thead>
        <tr>
            <th>Name</th>
            <th class="text-center">Commanders</th>
            <th class="text-center">Units</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result[$entityGroup] as $faction)
            <tr>
                <td>
                    @php($imgPath = "assets/images/icons/factions/{$faction->slug}.png")

                    @if (file_exists(public_path($imgPath)))
                        <img src="/{{ $imgPath }}" alt="{{ $faction->name }} Icon" style="width: 32px;" class="rounded mr-1">
                    @endif

                    <a href="{{ route('database.factions.show', $faction->slug) }}">{{ $faction->name }}</a>
                </td>
                <td class="text-center">
                    {{ $faction->commanders_count }}
                </td>
                <td class="text-center">
                    {{ $faction->units_count }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
