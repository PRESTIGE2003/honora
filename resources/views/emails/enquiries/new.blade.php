<h1>New website enquiry</h1>

<p><strong>Name:</strong> {{ $enquiry->name }}</p>
<p><strong>Email:</strong> {{ $enquiry->email }}</p>
<p><strong>Company:</strong> {{ $enquiry->company ?: 'Not provided' }}</p>
<p><strong>Event type:</strong> {{ $enquiry->event_type ?: 'Not provided' }}</p>

<h2>Message</h2>
<p style="white-space: pre-line">{{ $enquiry->message }}</p>