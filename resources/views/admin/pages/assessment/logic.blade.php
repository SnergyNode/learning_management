<script>
    let level = 0;


    function addAnswer() {
        level = level+1;
        let mother = $('.build_answer_parent');
        let elem = `<div class="row children_${level}" style="margin-bottom: 10px">
                                    <div class="col-md-8">
                                        <p><small>* Answer Option</small></p>
                                        <input type="text" name="item_answer_option[]" class="form-control" required placeholder="Answer Option" autocomplete="off">
                                    </div>
                                    <div class="col-md-2 col-8">
                                        <p><small>* Correct Answer</small></p>
                                        <select name="item_answer_is_correct[]" class="form-control" autocomplete="off">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-4">
                                        <p><small>Remove</small></p>
                                        <a href="#" onclick="event.preventDefault(); removeItem('children_'+${level})" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>`;
//        console.log(mother);
        mother.append(elem);
    }

    function removeItem(id) {
//        console.log($('div.children'));
        let item = $(`.${id}`);
//        console.log(item)
        item.remove()

    }
</script>