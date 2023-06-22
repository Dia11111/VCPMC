<div class="topbar">
    <div class="btn-select">
        <div class="language">
            <select name="language" id="language">
                <option value="vi">
                    Tiếng Việt
                </option>
                <option value="en">
                    English 
                </option>
            
            </select>
        </div>

    </div>
    <div class="user-profile">
        <a href="{{ route('profile') }}">
            <div class="infor-user">
                <div class="avatar">
                    <img src="{{ asset('images/avatar.png') }}" alt="avatar">
                </div>
                <div class="info-user-name">
                    <p>
                        Lê Tấn Tài
                    </p>
                    <span>
                        Admin
                    </span>
                </div>
            </div>
        </a>
    </div>
</div>