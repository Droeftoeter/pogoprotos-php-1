<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/RequestType.proto

namespace POGOProtos\Networking\Requests;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class RequestType
{
    const METHOD_UNSET = 0;
    const PLAYER_UPDATE = 1;
    const GET_PLAYER = 2;
    const GET_INVENTORY = 4;
    const DOWNLOAD_SETTINGS = 5;
    const DOWNLOAD_ITEM_TEMPLATES = 6;
    const DOWNLOAD_REMOTE_CONFIG_VERSION = 7;
    const FORT_SEARCH = 101;
    const ENCOUNTER = 102;
    const CATCH_POKEMON = 103;
    const FORT_DETAILS = 104;
    const ITEM_USE = 105;
    const GET_MAP_OBJECTS = 106;
    const FORT_DEPLOY_POKEMON = 110;
    const FORT_RECALL_POKEMON = 111;
    const RELEASE_POKEMON = 112;
    const USE_ITEM_POTION = 113;
    const USE_ITEM_CAPTURE = 114;
    const USE_ITEM_FLEE = 115;
    const USE_ITEM_REVIVE = 116;
    const TRADE_SEARCH = 117;
    const TRADE_OFFER = 118;
    const TRADE_RESPONSE = 119;
    const TRADE_RESULT = 120;
    const GET_PLAYER_PROFILE = 121;
    const GET_ITEM_PACK = 122;
    const BUY_ITEM_PACK = 123;
    const BUY_GEM_PACK = 124;
    const EVOLVE_POKEMON = 125;
    const GET_HATCHED_EGGS = 126;
    const ENCOUNTER_TUTORIAL_COMPLETE = 127;
    const LEVEL_UP_REWARDS = 128;
    const CHECK_AWARDED_BADGES = 129;
    const USE_ITEM_GYM = 133;
    const GET_GYM_DETAILS = 134;
    const START_GYM_BATTLE = 135;
    const ATTACK_GYM = 136;
    const RECYCLE_INVENTORY_ITEM = 137;
    const COLLECT_DAILY_BONUS = 138;
    const USE_ITEM_XP_BOOST = 139;
    const USE_ITEM_EGG_INCUBATOR = 140;
    const USE_INCENSE = 141;
    const GET_INCENSE_POKEMON = 142;
    const INCENSE_ENCOUNTER = 143;
    const ADD_FORT_MODIFIER = 144;
    const DISK_ENCOUNTER = 145;
    const COLLECT_DAILY_DEFENDER_BONUS = 146;
    const UPGRADE_POKEMON = 147;
    const SET_FAVORITE_POKEMON = 148;
    const NICKNAME_POKEMON = 149;
    const EQUIP_BADGE = 150;
    const SET_CONTACT_SETTINGS = 151;
    const SET_BUDDY_POKEMON = 152;
    const GET_BUDDY_WALKED = 153;
    const GET_ASSET_DIGEST = 300;
    const GET_DOWNLOAD_URLS = 301;
    const GET_SUGGESTED_CODENAMES = 401;
    const CHECK_CODENAME_AVAILABLE = 402;
    const CLAIM_CODENAME = 403;
    const SET_AVATAR = 404;
    const SET_PLAYER_TEAM = 405;
    const MARK_TUTORIAL_COMPLETE = 406;
    const LOAD_SPAWN_POINTS = 500;
    const CHECK_CHALLENGE = 600;
    const VERIFY_CHALLENGE = 601;
    const ECHO = 666;
    const DEBUG_UPDATE_INVENTORY = 700;
    const DEBUG_DELETE_PLAYER = 701;
    const SFIDA_REGISTRATION = 800;
    const SFIDA_ACTION_LOG = 801;
    const SFIDA_CERTIFICATION = 802;
    const SFIDA_UPDATE = 803;
    const SFIDA_ACTION = 804;
    const SFIDA_DOWSER = 805;
    const SFIDA_CAPTURE = 806;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0afa0d0a30504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f52657175657374547970652e70726f746f121e504f474f50" .
    "726f746f732e4e6574776f726b696e672e52657175657374732a9d0d0a0b" .
    "526571756573745479706512100a0c4d4554484f445f554e534554100012" .
    "110a0d504c415945525f5550444154451001120e0a0a4745545f504c4159" .
    "4552100212110a0d4745545f494e56454e544f5259100412150a11444f57" .
    "4e4c4f41445f53455454494e47531005121b0a17444f574e4c4f41445f49" .
    "54454d5f54454d504c41544553100612220a1e444f574e4c4f41445f5245" .
    "4d4f54455f434f4e4649475f56455253494f4e1007120f0a0b464f52545f" .
    "5345415243481065120d0a09454e434f554e544552106612110a0d434154" .
    "43485f504f4b454d4f4e106712100a0c464f52545f44455441494c531068" .
    "120c0a084954454d5f555345106912130a0f4745545f4d41505f4f424a45" .
    "435453106a12170a13464f52545f4445504c4f595f504f4b454d4f4e106e" .
    "12170a13464f52545f524543414c4c5f504f4b454d4f4e106f12130a0f52" .
    "454c454153455f504f4b454d4f4e107012130a0f5553455f4954454d5f50" .
    "4f54494f4e107112140a105553455f4954454d5f43415054555245107212" .
    "110a0d5553455f4954454d5f464c4545107312130a0f5553455f4954454d" .
    "5f524556495645107412100a0c54524144455f5345415243481075120f0a" .
    "0b54524144455f4f46464552107612120a0e54524144455f524553504f4e" .
    "5345107712100a0c54524144455f524553554c54107812160a124745545f" .
    "504c415945525f50524f46494c45107912110a0d4745545f4954454d5f50" .
    "41434b107a12110a0d4255595f4954454d5f5041434b107b12100a0c4255" .
    "595f47454d5f5041434b107c12120a0e45564f4c56455f504f4b454d4f4e" .
    "107d12140a104745545f484154434845445f45474753107e121f0a1b454e" .
    "434f554e5445525f5455544f5249414c5f434f4d504c455445107f12150a" .
    "104c4556454c5f55505f5245574152445310800112190a14434845434b5f" .
    "415741524445445f42414447455310810112110a0c5553455f4954454d5f" .
    "47594d10850112140a0f4745545f47594d5f44455441494c531086011215" .
    "0a1053544152545f47594d5f424154544c45108701120f0a0a4154544143" .
    "4b5f47594d108801121b0a1652454359434c455f494e56454e544f52595f" .
    "4954454d10890112180a13434f4c4c4543545f4441494c595f424f4e5553" .
    "108a0112160a115553455f4954454d5f58505f424f4f5354108b01121b0a" .
    "165553455f4954454d5f4547475f494e43554241544f52108c0112100a0b" .
    "5553455f494e43454e5345108d0112180a134745545f494e43454e53455f" .
    "504f4b454d4f4e108e0112160a11494e43454e53455f454e434f554e5445" .
    "52108f0112160a114144445f464f52545f4d4f4449464945521090011213" .
    "0a0e4449534b5f454e434f554e54455210910112210a1c434f4c4c454354" .
    "5f4441494c595f444546454e4445525f424f4e555310920112140a0f5550" .
    "47524144455f504f4b454d4f4e10930112190a145345545f4641564f5249" .
    "54455f504f4b454d4f4e10940112150a104e49434b4e414d455f504f4b45" .
    "4d4f4e10950112100a0b45515549505f424144474510960112190a145345" .
    "545f434f4e544143545f53455454494e475310970112160a115345545f42" .
    "554444595f504f4b454d4f4e10980112150a104745545f42554444595f57" .
    "414c4b454410990112150a104745545f41535345545f44494745535410ac" .
    "0212160a114745545f444f574e4c4f41445f55524c5310ad02121c0a1747" .
    "45545f5355474745535445445f434f44454e414d4553109103121d0a1843" .
    "4845434b5f434f44454e414d455f415641494c41424c4510920312130a0e" .
    "434c41494d5f434f44454e414d45109303120f0a0a5345545f4156415441" .
    "5210940312140a0f5345545f504c415945525f5445414d109503121b0a16" .
    "4d41524b5f5455544f5249414c5f434f4d504c45544510960312160a114c" .
    "4f41445f535041574e5f504f494e545310f40312140a0f434845434b5f43" .
    "48414c4c454e474510d80412150a105645524946595f4348414c4c454e47" .
    "4510d90412090a044543484f109a05121b0a1644454255475f5550444154" .
    "455f494e56454e544f525910bc0512180a1344454255475f44454c455445" .
    "5f504c4159455210bd0512170a1253464944415f52454749535452415449" .
    "4f4e10a00612150a1053464944415f414354494f4e5f4c4f4710a1061218" .
    "0a1353464944415f43455254494649434154494f4e10a20612110a0c5346" .
    "4944415f55504441544510a30612110a0c53464944415f414354494f4e10" .
    "a40612110a0c53464944415f444f5753455210a50612120a0d5346494441" .
    "5f4341505455524510a606620670726f746f33"
));
