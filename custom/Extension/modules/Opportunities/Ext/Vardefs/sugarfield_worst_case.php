<?php
 // created: 2022-02-25 13:00:23
$dictionary['Opportunity']['fields']['worst_case']['audited']=false;
$dictionary['Opportunity']['fields']['worst_case']['massupdate']=false;
$dictionary['Opportunity']['fields']['worst_case']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['worst_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['worst_case']['calculated']=true;
$dictionary['Opportunity']['fields']['worst_case']['formula']='rollupConditionalSum($revenuelineitems, "worst_case", "sales_stage", forecastSalesStages(true, false))';
$dictionary['Opportunity']['fields']['worst_case']['enforced']=true;
$dictionary['Opportunity']['fields']['worst_case']['readonly']=true;
$dictionary['Opportunity']['fields']['worst_case']['enable_range_search']=false;

 ?>