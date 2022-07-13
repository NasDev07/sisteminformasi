<div class="aside-block">
    <button type="button" class="btn btn-primary btn-lg btn-radius my-3">Populer</button>
    <div class="tab-content" id="pills-tabContent">
        <!-- Popular -->
        @php
            $no = 1;
        @endphp
        @foreach ($mahasiswa as $mahasiswa)
            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                <div class="post-entry-1 border-bottom">
                    <img src="{{ asset('images/' . $mahasiswa->foto) }}"
                    class="img-fluid rounded" alt="">
                    <div class="post-meta fw-light"><span class="date"><i>Sport</i></span><span><i>{{ $mahasiswa->tanggal }}</i></span>
                    </div>
                    <h5 class="mb-2"><a href="/detailberita/{{ $mahasiswa->id }}">{{ $mahasiswa->judul }}</a></h5>
                    <br>
                </div>
            </div>
            <p class="text-transparent" style="font-size: 1px">{{ $no++ }}</p>
        @endforeach
    </div>
</div>
