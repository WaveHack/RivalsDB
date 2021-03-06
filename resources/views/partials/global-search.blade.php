<form action="{{ route('search') }}" method="get">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" style="background-color: #fff; color: #999;">
                <i class="fa fa-search"></i>
            </span>
        </div>

        <input type="search"
               name="q"
               class="form-control form-control-lg border-left-0 border"
               id="global-search"
               autocomplete="off"
               placeholder="{{ isset($placeholder) ? "Results for '{$placeholder}'" : 'Search' }}"
               aria-label="search"
               style="padding-left: 0;">
    </div>
</form>
