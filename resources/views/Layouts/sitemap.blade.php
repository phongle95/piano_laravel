<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>{{ route('Pages.trangchu') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.sanpham') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.gioithieu') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.suachua') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.tochucsukien') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.chothuenhaccu') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
        <url>
            <loc>{{ route('Pages.lienhe') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.giaoduc') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        <url>
            <loc>{{ route('Pages.timkiem') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
        <url>
            <loc>{{ route('Pages.search') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
        <url>
            <loc>{{ route('Pages.video') }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>

        @foreach ($sanpham as $sp)
        <url>
            <loc>{{ route('Pages.chitiet',['slug' => str_slug($sp->tenSP),'id'=>$sp->id]) }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach

        @foreach ($news as $item)
        <url>
            <loc>{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach

    </urlset>
