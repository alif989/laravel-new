
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
                <input type="text" name="NAME"  value="{{isset($list[0]->NAME) ? $list[0]->NAME  : ''}}" class="form-control">
                <input type="hidden" name="TBL_ID"  value={{isset($list[0]->TBL_ID) ? $list[0]->TBL_ID  : ''}} class="form-control">
            </div>
        </div>
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-4">
                <input type="text" name="USER_ID" value="{{isset($list[0]->USER_ID) ? $list[0]->USER_ID : '' }}" class="form-control">
            </div>
        </div>
        <div class="form-group  row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
            </div>
        </div>
    </form>
</div>
<script>
    $("#crud_id").validate({
        rules:{
            NAME:{
                required: true,
            },
            USER_ID:{
                required: true
            }

        }

    });

</script>