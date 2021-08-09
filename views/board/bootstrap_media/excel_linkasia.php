<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width:100px;">이름</th>                    
                    <th style="width:80px;">나이</th>
                    <th style="width:150px;">핸드폰번호</th>
                    <th>성별</th>
                    <th style="width:150px;">신청일시</th>
                    <th style="width:400px;">문의사항</th>
                    <th style="width:100px;">상태</th>
                    <th style="width:150px;">사유</th>
                    
                    <th style="width:100px;">API상태</th>
                    <th style="width:150px;">전송일</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            if (element('list', element('data', $view))) {
                foreach (element('list', element('data', $view)) as $result) {
            ?> 

                 <tr <?php echo element('mlh_status', $result) === '1' ? '' : 'style="background-color: #ff5c57;"'; ?> >
                    <td><?php echo element('display_name', $result); ?></td>                    
                    <td><?php echo (element('mlh_age', $result)); ?></td>
                    <td><?php echo is_phone(element('mlh_mobileno', $result)) ? get_phone(element('mlh_mobileno', $result)):(element('mlh_mobileno', $result)); ?></td>
                    <td>
                        <?php 
                        if(element('mlh_gender', $result) === '1') echo "여성"; 
                        else if(element('mlh_gender', $result) === '2') echo "남성"; 
                        ?>
                    </td>
                    <td><?php echo element('mlh_datetime', $result); ?></td>
                    <td><?php echo html_escape(element('mlh_text', $result)) ?></td>
                    <td><?php echo element('mlh_status', $result) === '1' ? '유효' : '무효'; ?> </td>
                    <td><?php echo html_escape(element('mlh_memo', $result)) ?></td>
                    <?php
                     
                        if(element('mlh_api_flag2', $result) === "1") echo "<td>".element('mlh_msg2', $result)."</td>";
                        else echo "<td>-</td>";
                        echo '<td>'.element('mlh_rst2_date', $result,'-').'</td>';
                      
                     ?>
                     
                </tr>
            <?php
                }
            }
            if (  ! element('list', element('data',  $view))) {
            ?>
                <tr>
                    <td colspan="6" class="nopost">게시물이 없습니다</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    
