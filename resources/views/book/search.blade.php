<div class="col-sm-5">
    <div class="pull-right">
        <div class="input-group">
            <input class="form-control" id="search"
                   value="{{ request()->session()->get('search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('book')}}?search='+this.value)"
                   placeholder="Search Book Name Or Book Code" name="search"
                   type="text"/>
            <div class="input-group-btn">
                <button type="submit" class="btn btn-primary"
                        onclick="ajaxLoad('{{url('book')}}?search='+$('#search').val())">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>

    </div>
</div>