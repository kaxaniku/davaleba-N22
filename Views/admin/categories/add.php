<div class="container">
    <div class="row">
        <form class="form" action="?type=admin&page=categories&action=insert" method="post">
            <h2>Add New Category</h2>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label for="">Show on home page</label>
                <select name="home" id="">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>
            <div class="form-group">
                <button>Add</button>
            </div>
        </form>
    </div>
</div>