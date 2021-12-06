<div>
    <h2>Lista de contato</h2>
    @foreach($contacts as $contact)
        <div style="padding: 10px; border: 1px solid #e2e2e2; margin-top: 20px;">
            <h3>{{ $contact->name }}</h3>
            <h4>{{ $contact->email }} - {{ $contact->phone }}</h4>
        </div>
    @endforeach
</div>
