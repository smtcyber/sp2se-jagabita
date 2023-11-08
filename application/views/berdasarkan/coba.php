    <table id="example1" class="table table-bordered table-striped">
    <?php 
        foreach($coba->result_array() as $row):
         $didik = $row['pendidikan'];
         $total = $row['total'];
    ?>
            <tr>
            <td><?php echo htmlentities($didik, ENT_QUOTES, 'UTF-8');?></td>
            <td><?php echo htmlentities($total , ENT_QUOTES, 'UTF-8');?></td>
        </tr>
    <?php endforeach; ?>
    </table>