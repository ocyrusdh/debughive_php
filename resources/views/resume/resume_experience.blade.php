<div class="sub_section">
    <h3>
        @if($xp->link)
            <a href="$xp[link]">{{ $xp->company }}</a>
        @else
            {{ $xp->company }}
        @endif
        <span class="right">{{ $xp->start . ' - ' . $xp->end }}</span>
    </h3>
    {{ $xp->job_title }}<br />
    <?php
        $xp_skills = [];
	    foreach ($xp->skills as $xp_s) {
			$xp_skills[] = $xp_s->item->label;
	    	}
	    echo implode(' - ', $xp_skills);
    ?>
    <p>{{ $xp->description }}</p>
    @if ($xp->list)
        <ul>
            @foreach ($xp->list as $li)
                <li>
                    @if($li->link)
                        <a href="{{ $li->link }}">{{ $li->item }}</a>
                    @else
                        {{ $li->item }}
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
    @if ($xp->contact)
        <p>
            For proof of employment:<br />
            {{ $xp->contact->name }}<br />
            {{ $xp->contact->job_title }}<br />
            <a href="callto:{{ $xp->contact->phone }}">{{ format_phone($xp->contact->phone) }}</a>
        </p>
    @endif
</div>