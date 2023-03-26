<h3>Nowa notatka</h3>
<div>
    <?php if ($params['created']) : ?>
        <div>
            <div>Tytul: <?php echo $params['title'] ?></div>
            <div>Opis: <?php echo $params['description'] ?></div>
        </div>
    <?php else : ?>
        <form action="/?action=create" class="note-form" method="post">
            <ul>
                <li>
                    <lable for="title">Tytul <span class="required">*</span></lable>
                    <input type="text" name="title" id="title" class="filed-long">
                </li>
                <li>
                    <lable for="field5">Tresc</lable>
                    <textarea name="description" id="field5" class="field-long field-textarea"></textarea>
                </li>
                <li>
                    <input type="submit" value="Submit">
                </li>
            </ul>
        </form>
    <?php endif; ?>
</div>