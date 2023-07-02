@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{asset('css/feedback.css')}}">
@endsection

@section('script')
<script>
    const tableItems = document.querySelectorAll('.table-item');
    const detailDiv = document.getElementById('detail');

    // Xử lý sự kiện khi chọn phần tử trong table bên phải
    tableItems.forEach(item => {
        item.addEventListener('click', () => {
            // Xóa lớp 'selected' của tất cả các phần tử
            tableItems.forEach(item => {
                item.classList.remove('selected');
            });

            // Thêm lớp 'selected' cho phần tử được chọn
            item.classList.add('selected');

            // Hiển thị thông tin chi tiết của phần tử đã chọn trong table bên trái
            detailDiv.textContent = `${item.textContent}`;
        });
    });
</script>
@endsection

@section('content')
<div class="breadcrumb">
    <div class="breadcrumb-page">
        <a href="">
            Home
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon"></i>
    </div>

    <div class="breadcrumb-page">
        <a href="">
            Show
        </a>
        <i class="fa-solid fa-chevron-right breadcrumb-page-icon"></i>
    </div>

    <div class="breadcrumb-page">
        <a href="">
            ID 1
        </a>
    </div>
</div>
<h1>
    Hướng dẫn sử dụng
</h1>
<div class="table-container">
    <div class="table">
        <h2>Danh mục hướng dẫn</h2>
        <div class="table-item" style="">1. Lorem ipsum dolor sit amet
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">2. Consectetur adipiscing elit sed do
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">3. Iusmod tempor incididunt ut labo
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">4. Ut enim ad minim veniam
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">5. Quis nostrud exercitation ullamco
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">6. Excepteur sint occaecat cupidatats
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">7. Sunt in culpa qui officiat
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
        <div class="table-item">8. Sed ut perspiciatis unde omnis iste
            <div hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Platea sit placerat odio lorem. Cum eleifend bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sit placerat odio lorem. Cum eleifend
                bibendum ipsum quis scelerisque dui nibh odio id. Nam cras nec non posuere etiam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
            </div>
        </div>
    </div>

    <div class=" table detail-table">
        <div class="text-center" style="color: #FF7506; font-weight: bold; margin-bottom: 10px;">Lorem ipsum dolor sit amet</div>
        <div id="detail" style="overflow-x: auto;"></div>
    </div>
</div>
@endsection