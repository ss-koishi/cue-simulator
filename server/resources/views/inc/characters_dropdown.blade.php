<div class="dropdown">
    <button type="button" class="btn btn-outline-dark dropdown-toggle" id="cast{{$i + 1}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        キャスト
    </button>
    <div class="dropdown-menu" aria-labelledby="cast{{$i + 1}}">
    @foreach( $characters as $character )
        <a class="dropdown-item" data-id="{{ $character->id }}">{{ $character->name }}</a>
    @endforeach
    </div><!-- .dropdown-menu -->
</div><!-- .dropdown -->
