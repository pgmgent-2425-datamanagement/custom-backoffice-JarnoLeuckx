<form method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $books->title; ?>">
    </div>
    
    <input type="submit" value="Save" class="btn btn-primary">
</form>