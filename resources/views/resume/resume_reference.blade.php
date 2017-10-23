<div class="sub_section reference">
    <h4>{{ $ref->name }}</h4>
    <div>{{ $ref->job_title }}</div>
    <div>{{ $ref->company }}</div>
    <a href="callto:{{ $ref->phone }}">{{ format_phone($ref->phone) }}</a>
    <a href="mailto:{{ $ref->email }}">{{ $ref->email }}</a>
</div>