<?php

// Count votes for President
$pres_votes_query = "SELECT pres, COUNT(*) as count FROM votes GROUP BY pres";
$pres_votes_result = mysqli_query($cxn, $pres_votes_query);
$pres_votes = array();

while ($pres_row = mysqli_fetch_assoc($pres_votes_result)) {
    $candidate_id = $pres_row['pres'];
    $vote_count = $pres_row['count'];
    $pres_votes[$candidate_id] = $vote_count;
}

// Count votes for Vice President
$vp_votes_query = "SELECT vicepres, COUNT(*) as count FROM votes GROUP BY vicepres";
$vp_votes_result = mysqli_query($cxn, $vp_votes_query);
$vp_votes = array();

while ($vp_row = mysqli_fetch_assoc($vp_votes_result)) {
    $candidate_id = $vp_row['vicepres'];
    $vote_count = $vp_row['count'];
    $vp_votes[$candidate_id] = $vote_count;
}

// counting votes for Senators
$sen_votes_query = "SELECT senator, COUNT(*) as count FROM votes GROUP BY senator";
$sen_votes_result = mysqli_query($cxn, $sen_votes_query);
$sen_votes = array();

while ($sen_row = mysqli_fetch_assoc($sen_votes_result)) {
    $senator_ids = explode(',', $sen_row['senator']);
    $vote_count = $sen_row['count'];

    // Loop through each senator ID and add the vote count to the respective candidate
    foreach ($senator_ids as $senator_id) {
        $sen_votes[$senator_id] = $vote_count;
    }
}


// Count votes for Batch Representatives
$brep_votes_query = "SELECT batchrep, COUNT(*) as count FROM votes GROUP BY batchrep";
$brep_votes_result = mysqli_query($cxn, $brep_votes_query);
$brep_votes = array();

while ($brep_row = mysqli_fetch_assoc($brep_votes_result)) {
    $batch_rep_ids = explode(',', $brep_row['batchrep']);
    $vote_count = $brep_row['count'];

    // Loop through each batch representative ID and add the vote count to the respective candidate
    foreach ($batch_rep_ids as $batch_rep_id) {
        $brep_votes[$batch_rep_id] = $vote_count;
    }
}

//Count votes for Governor
$gov_votes_query = "SELECT gov, COUNT(*) as count FROM votes GROUP BY gov";
$gov_votes_result = mysqli_query($cxn, $gov_votes_query);
$gov_votes = array();

while ($gov_row = mysqli_fetch_assoc($gov_votes_result)) {
    $candidate_id = $gov_row['gov'];
    $vote_count = $gov_row['count'];
    $gov_votes[$candidate_id] = $vote_count;
}

//Count votes for Vice Governor
$vicegov_votes_query = "SELECT vicegov, COUNT(*) as count FROM votes GROUP BY vicegov";
$vicegov_votes_result = mysqli_query($cxn, $vicegov_votes_query);
$vicegov_votes = array();

while ($vicegov_row = mysqli_fetch_assoc($vicegov_votes_result)) {
    $candidate_id = $vicegov_row['vicegov'];
    $vote_count = $vicegov_row['count'];
    $vicegov_votes[$candidate_id] = $vote_count;
}
