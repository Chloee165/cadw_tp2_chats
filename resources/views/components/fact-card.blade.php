<div class="fact-card">
    <a href="{{ route('faits.show', $id) }}">
        <p>{{ $id }} &nbsp; {{ $fact }}</p>
    </a>
    <div class="actions">
        
        <a href="{{ route('faits.edit', $id) }}" class="text-primary" title="Edit">
            <i class="fas fa-pencil-alt"></i> 
        </a>
       
        <form action="{{ route('faits.destroy', $id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-danger" title="Delete">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
</div>