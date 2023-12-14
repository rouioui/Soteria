<?php

require('model/frontend.php');

// PARTIE DES MEMBRES
function loginPage(){
    addView();
    sysLogin();
    require("view/login.php");
}
function signUpPage(){
    addView();
    sysSignup();
    require("view/signup.php");
}

function homePage(){
    addView();
    $categories = getAllCategories();
    //$postes = getAllCampaigns();
    $recordsPerPage = 4;
    $postes = getRecordsCampaigns(1, $recordsPerPage);
    require("view/home.php");
}
function campaignPage(){
    addView();
    $poste = getCampaign($_GET['campaign_id']);
    $nbDonation = numDonationsOfCampaign($_GET['campaign_id']);
    $nbDonation = $nbDonation->fetch();
    $donators = whoDonate($_GET['campaign_id']);
    $donators = $donators->fetchAll();
    require("view/campaign.php");
}
function campaignsPage(){
    addView();
    $categories = getAllCategories()->fetchAll();
    $postes = getAllCampaigns();
    require("view/campaigns.php");
}
function profilePage(){
    addView();
    sysModifyProfile();
    $postes = getProfilePostes();
    
    require("view/profile.php");
}
function createPage(){
    $categories = getAllCategories();
    addCampaign();
    require("view/create.php");
}
function donationPage(){
    addView();
    addDonation();
    $poste = getCampaign($_GET['campaign_id']);
    if($poste->rowCount() == 0) header("Location: campaigns");
    $poste = $poste->fetchAll();
    require("view/donation.php");
}