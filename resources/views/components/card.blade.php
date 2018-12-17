{{--

$type (enum: commander/unit)
$entity (eloquent model)

--}}
<div class="card card-rarity-{{ $entity->rarity }} mb-3">
    @php
        $typePlural = str_plural($type);

        // hacky hack :)
        switch ($type) {
            case 'commander':
                $portraitPath = "assets/images/portraits/{$typePlural}/{$entity->slug}-card.jpg";
                break;

            case 'unit':
                $portraitPath = "assets/images/portraits/{$typePlural}/{$entity->faction->slug}/{$entity->slug}.png";
                break;
        }

        $url = route("db.{$typePlural}.show", $entity->slug);
    @endphp

    @if (file_exists(public_path($portraitPath)))
        <a href="{{ $url }}">
            <img src="/{{ $portraitPath }}" alt="{{ $portraitAlt ?? null }}" class="card-img-top">
        </a>
    @endif

    <div class="card-body text-left">
        <div class="card-title">
            <img src="/assets/images/icons/factions/{{ $entity->faction->slug }}.png"
                 alt="{{ $entity->faction->name }} Logo"
                 title="{{ $entity->faction->name }}"
                 style="width: 24px;"
                 class="float-right">

            <a href="{{ $url }}">
                {{ $entity->name }}
            </a>
        </div>

        <h6 class="card-subtitle mb-2 text-muted">
            <span class="rarity-{{ $entity->rarity }}">
                {{ ucfirst($entity->rarity) }}
                {{ ucfirst($type) }}
            </span>
        </h6>

        <p class="card-text">
            <em>
                {{ $entity->flavor_description }}
            </em>
        </p>
    </div>
</div>
