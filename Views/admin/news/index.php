<section class="news_sec">
    <div class="container">
        <div class="news_header">
        <h1>News</h1>
        <a href="?type=admin&page=news&action=add">Add</a>
        </div>
        <table>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>short text</th>
                    <th>Category</th>
                    <th>actions</th>
                </tr>
                <?php foreach($data['news'] as $value):?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['title'] ?></td>
                        <td><?= $value['short_text'] ?></td>
                        <td><?= $value['category_title'] ?></td>
                        <td class="action">
                            <a href="?type=admin&page=news&action=edit&id=<?= $value["id"]?>">edit</a>
                            <form action="?type=admin&page=news&action=ERASURE" method="post">
                                <input type="hidden" name="id" value="<?= $value['id']?>">
                                <button>delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
</section>