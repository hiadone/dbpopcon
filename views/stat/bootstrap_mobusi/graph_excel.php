<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>
<table width="100%" border="1" bordercolor="#E4E4E4" cellspacing="0" cellpadding="0">
        <tr>
            <th height="40"><?php echo $this->input->get('datetype', null, 'd')==='domain'? '도메인':'일시'; ?></th>
            <th>노출수</th>
            <th>클릭수</th>
            <th>비율</th>
        </tr>
        <?php
        if (element('list', $view)) {
            foreach (element('list', $view) as $key => $result) {
                if ($this->input->get('withoutzero') && ! element('count', $result)) {
                    continue;
                }
        ?>
        <tr>
            <td height="40"><?php echo $key; ?></td>
            <td><?php echo element('hit_count', $result, 0); ?></td>
            <td><?php echo element('count', $result, 0); ?></td>
            <td><?php if(!empty(element('hit_count', $result, 0))) echo round((element('count', $result, 0)/element('hit_count', $result, 0)*100),2); ?>%</td>
            
        </tr>
    <?php
        }
    ?>
        <tr>
            <td height="40" bgcolor="#DEDEDE">전체</td>
            <td bgcolor="#DEDEDE"><?php echo element('hit_sum_count', $view, 0); ?></td>
            <td bgcolor="#DEDEDE"><?php echo element('sum_count', $view, 0); ?></td>
            <td bgcolor="#DEDEDE"></td>
        </tr>
    <?php
    }
    ?>
</table>
