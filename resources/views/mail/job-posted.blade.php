<h2>
    {{ $job->title }}
</h2>


<p>
    Your job is posted on our jobs page.
</p>

<p>
    <a href="{{ url('/jobs/'. $job->id) }}">View your job listing</a>
</p>