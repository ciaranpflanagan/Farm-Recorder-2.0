        <form role="form" action="rename_submit.php" method="post">
            <!-- text input -->
            <div class="form-group">
            <p style="color: red;">Note: If you haven't set up your flocks nothing will happen.</p>
                <label>Rename</label>
                <input type="text" class="form-control" name="old_name" placeholder="Previous Name" />
                <input type="text" class="form-control" name="flock" placeholder="New Name" />
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>