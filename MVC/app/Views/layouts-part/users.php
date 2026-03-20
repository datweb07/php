<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th>Ngày Tạo</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $count = 1;
        foreach ($data as $i):


            ?>
            <tr>
                <td>
                    <?php
                    echo $count;
                    $count++;

                    ?>
                </td>

                <td>
                    <?php
                    echo $i['fullname'];

                    ?>
                </td>

                <td>
                    <?php
                    echo $i['email'];

                    ?>
                </td>


                <td>
                    <?php
                    echo $i['created_at'];

                    ?>
                </td>
            </tr>

            <?php
        endforeach;
        ?>
    </tbody>
</table>