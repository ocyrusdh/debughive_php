<div class="sub_section{{ (ucwords($skill->skill) == 'Environments' ? ' pagebreak' : '') }}">
    <h3>{{ ucwords($skill->skill) }}</h3>
    @foreach($skill->items as $item)
        {{ $item->label }}
        <div class="rating score_{{ $item->score }}">
            @for ($i = 0; $i < 5; $i++)
                <div></div>
            @endfor
        </div>
    @endforeach
</div>