<div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
            Kesimpulan
        </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <article class="card">
                <div class="card-inner card-inner-xl">
                    <div class="card card-preview">
                        <div class="container m-2">
                        <p>
                            Jadi Urutan dari yang terbesar adalah :
                            <br>
                            @foreach ($sortData as $key => $item)
                            @if($loop->iteration == 1)
                            <li><b>Alternative {{ $key }} dengan nilai {{ $item }}</b></li>
                            @continue
                            @endif
                            <li>Alternative {{ $key }} dengan nilai {{ $item }}</li>
                            @if($loop->iteration == 3)
                                @break
                            @endif
                            @endforeach
                        </p>
                    </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
