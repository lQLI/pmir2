<?php
namespace app\Packet;

/**
 * 代码
 */
class ServerState
{
    //注册信息
    const TUserEntry = [
        'account'  => 16,
        'password' => 20,
        'username' => 12,
        'id_card'     => 18,
        'phone'    => 14,
        'questions1'     => 20,
        'answers1'   => 20,
        'mail'    => 30,
    ];

    const TUserEntryAdd = [
        'questions2'       => 20,
        'answers2'     => 20,
        'birth_day'    => 10,
        'mobile_phone' => 14,
        // 'sMemo'        => 20,
        // 'sMemo2'       => 20,
    ];

    const EFFECT_DEADLINESS       = 10; //爆击
    const EFFECT_VAMPIRE          = 11; //吸血
    const EFFECT_MISSION_ACCEPT   = 12; //接受任务
    const EFFECT_MISSION_NEXT     = 13; //步骤完成
    const EFFECT_MISSION_COMPLETE = 14; //任务完成
    const EFFECT_DARE_WIN         = 15; //挑战赢了
    const EFFECT_DARE_LOSS        = 16; //挑战输了
    const EFFECT_BEACON_1         = 17; //暂留
    const EFFECT_BEACON_2         = 18; //宝宝升级
    const EFFECT_BEACON_3         = 19; //双倍经验
    const EFFECT_BEACON_4         = 20; //一心一意
    const EFFECT_BEACON_5         = 21; //心心相印
    const EFFECT_BEACON_6         = 22; //飞火流星
    const EFFECT_BEACON_7         = 23; //浪漫星雨
    const EFFECT_BEACON_8         = 24; //绮梦幻想
    const EFFECT_BEACON_9         = 25; //长空火舞
    const EFFECT_BEACON_10        = 26; //如雾似梦
    const EFFECT_LEVELUP          = 27; //人物升级
    const EFFECT_SHIELD           = 28; //护体神盾

    const RG_MINMSGINDEX        = 1;
    const RG_MAXMSGINDEX        = 150;

    // 角色英雄相关
    const CM_QUERYBAGITEMS = 79; // 查询包裹物品

    const RM_TURN               = 1 + self::RG_MAXMSGINDEX;
    const RM_WALK               = 2 + self::RG_MAXMSGINDEX;
    const RM_RUN                = 3 + self::RG_MAXMSGINDEX;
    const RM_HIT                = 4 + self::RG_MAXMSGINDEX;
    const RM_SPELL              = 5 + self::RG_MAXMSGINDEX;
    const RM_PUSH               = 6 + self::RG_MAXMSGINDEX;
    const RM_RUSH               = 7 + self::RG_MAXMSGINDEX;
    const RM_STRUCK             = 8 + self::RG_MAXMSGINDEX;
    const RM_DEATH              = 9 + self::RG_MAXMSGINDEX;
    const RM_DISAPPEAR          = 10 + self::RG_MAXMSGINDEX;
    const RM_MAGSTRUCK          = 11 + self::RG_MAXMSGINDEX;
    const RM_MAGSTRUCK_MINE     = 12 + self::RG_MAXMSGINDEX;
    const RM_STRUCK_MAG         = 13 + self::RG_MAXMSGINDEX;
    const RM_10101              = 14 + self::RG_MAXMSGINDEX;
    const RM_10155              = 15 + self::RG_MAXMSGINDEX;
    const RM_HEAR               = 16 + self::RG_MAXMSGINDEX;
    const RM_DELAYPUSHED        = 17 + self::RG_MAXMSGINDEX;
    const RM_CRY                = 18 + self::RG_MAXMSGINDEX;
    const RM_POISON             = 19 + self::RG_MAXMSGINDEX;
    const RM_TRANSPARENT        = 20 + self::RG_MAXMSGINDEX;
    const RM_USERNAME           = 21 + self::RG_MAXMSGINDEX;
    const RM_LEVELUP            = 22 + self::RG_MAXMSGINDEX;
    const RM_CHANGENAMECOLOR    = 23 + self::RG_MAXMSGINDEX;
    const RM_LOGON              = 24 + self::RG_MAXMSGINDEX;
    const RM_HEALTHSPELLCHANGED = 25 + self::RG_MAXMSGINDEX;
    const RM_SYSMESSAGE         = 26 + self::RG_MAXMSGINDEX;
    const RM_GROUPMESSAGE       = 27 + self::RG_MAXMSGINDEX;
    const RM_GUILDMESSAGE       = 28 + self::RG_MAXMSGINDEX;
    const RM_ITEMSHOW           = 29 + self::RG_MAXMSGINDEX;
    const RM_ITEMHIDE           = 30 + self::RG_MAXMSGINDEX;
    const RM_DOOROPEN           = 31 + self::RG_MAXMSGINDEX;
    const RM_DOORCLOSE          = 32 + self::RG_MAXMSGINDEX;
    const RM_FEATURECHANGED     = 33 + self::RG_MAXMSGINDEX;
    const RM_CHANGEMAP          = 34 + self::RG_MAXMSGINDEX;
    const RM_BUTCH              = 35 + self::RG_MAXMSGINDEX;
    const RM_MAGICFIRE          = 36 + self::RG_MAXMSGINDEX;
    const RM_SKELETON           = 37 + self::RG_MAXMSGINDEX;
    const RM_CHARSTATUSCHANGED  = 38 + self::RG_MAXMSGINDEX;
    const RM_DIGUP              = 39 + self::RG_MAXMSGINDEX;
    const RM_DIGDOWN            = 40 + self::RG_MAXMSGINDEX;
    const RM_FLYAXE             = 41 + self::RG_MAXMSGINDEX;
    const RM_LIGHTING           = 42 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_SHOW     = 43 + self::RG_MAXMSGINDEX;
    const RM_RECONNECTION       = 44 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_SHOW2    = 45 + self::RG_MAXMSGINDEX;
    const RM_OPENHEALTH         = 46 + self::RG_MAXMSGINDEX;
    const RM_CLOSEHEALTH        = 47 + self::RG_MAXMSGINDEX;
    const RM_DOOPENHEALTH       = 48 + self::RG_MAXMSGINDEX;
    const RM_CHANGEFACE         = 49 + self::RG_MAXMSGINDEX;
    const RM_MONMOVE            = 50 + self::RG_MAXMSGINDEX;
    const RM_10205              = 51 + self::RG_MAXMSGINDEX;
    const RM_ALIVE              = 52 + self::RG_MAXMSGINDEX;
    const RM_SENDDELITEMLIST    = 53 + self::RG_MAXMSGINDEX;
    const RM_LEAP               = 54 + self::RG_MAXMSGINDEX;
    const RM_USERBIGSTORAGEITEM = 55 + self::RG_MAXMSGINDEX;
    const RM_USERBIGGETBACKITEM = 56 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_FIRE2    = 57 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_FIRE     = 58 + self::RG_MAXMSGINDEX;
    const RM_PLAYDICE           = 59 + self::RG_MAXMSGINDEX;
    const RM_GAMEGOLDCHANGED    = 60 + self::RG_MAXMSGINDEX;
    const RM_HORSERUN           = 61 + self::RG_MAXMSGINDEX;
    const RM_MOVEFAIL           = 62 + self::RG_MAXMSGINDEX;
    const RM_RUSHKUNG           = 63 + self::RG_MAXMSGINDEX;
    const RM_SHOPGETGAMEPOINT   = 64 + self::RG_MAXMSGINDEX;
    const RM_MAGICFIREFAIL      = 65 + self::RG_MAXMSGINDEX;
    const RM_BREAKWEAPON        = 66 + self::RG_MAXMSGINDEX;
    const RM_SHOWEFFECT         = 67 + self::RG_MAXMSGINDEX;
    const RM_ZEN_BEE            = 68 + self::RG_MAXMSGINDEX;
    const RM_MAGHEALING         = 69 + self::RG_MAXMSGINDEX;
    const RM_DELAYMAGIC         = 70 + self::RG_MAXMSGINDEX;
    const RM_CREATENEWGUILD     = 71 + self::RG_MAXMSGINDEX;
    const RM_SHOPGAMEGOLDCHANGE = 72 + self::RG_MAXMSGINDEX;
    const RM_SHOPGETPOINT       = 73 + self::RG_MAXMSGINDEX;
    const RM_USEROPENSHOP       = 74 + self::RG_MAXMSGINDEX;
    const RM_DEFMESSAGE         = 75 + self::RG_MAXMSGINDEX;
    const RM_DEFSOCKET          = 76 + self::RG_MAXMSGINDEX;
    const RM_RUSHCBO            = 77 + self::RG_MAXMSGINDEX;
    const RM_BUGLE              = 78 + self::RG_MAXMSGINDEX;
    const RM_DELAYMAGIC2        = 79 + self::RG_MAXMSGINDEX;
    const RM_RANDOMMOVE         = 80 + self::RG_MAXMSGINDEX;
    const RM_OFFLINESHOP        = 81 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_SHOW3    = 82 + self::RG_MAXMSGINDEX;
    const RM_SPACEMOVE_FIRE3    = 83 + self::RG_MAXMSGINDEX;
    const RM_MONMAGIC           = 84 + self::RG_MAXMSGINDEX;
    const RM_GETLARGESSGOLD     = 85 + self::RG_MAXMSGINDEX;
    const RM_MAGICMOVE          = 86 + self::RG_MAXMSGINDEX;
    const RM_MAKEPOISON         = 87 + self::RG_MAXMSGINDEX;
    const RM_MAGICFIR           = 88 + self::RG_MAXMSGINDEX;
    const RM_REFICONINFO        = 89 + self::RG_MAXMSGINDEX;
    const MAXCLIENTSERVERCOUNT  = 91 + self::RG_MAXMSGINDEX;
    
    const SM_CLOSESESSION             = 5000;
    const SM_RUSH                     = 5001;
    const SM_RUSHKUNG                 = 5002;
    const SM_FIREHIT                  = 5003;
    const SM_BACKSTEP                 = 5004;
    const SM_TURN                     = 5005;
    const SM_WALK                     = 5006;
    const SM_SITDOWN                  = 5007;
    const SM_RUN                      = 5008;
    const SM_HIT                      = 5009;
    const SM_HEAVYHIT                 = 5010;
    const SM_BIGHIT                   = 5011;
    const SM_SPELL                    = 5012;
    const SM_POWERHIT                 = 5013;
    const SM_LONGHIT                  = 5014;
    const SM_DIGUP                    = 5015;
    const SM_DIGDOWN                  = 5016;
    const SM_FLYAXE                   = 5017;
    const SM_LIGHTING                 = 5018;
    const SM_WIDEHIT                  = 5019;
    const SM_CRSHIT                   = 5020;
    const SM_TWINHIT                  = 5021;
    const SM_ALIVE                    = 5022;
    const SM_MOVEFAIL                 = 5023;
    const SM_HIDE                     = 5024;
    const SM_DISAPPEAR                = 5025;
    const SM_STRUCK                   = 5026;
    const SM_DEATH                    = 5027;
    const SM_SKELETON                 = 5028;
    const SM_NOWDEATH                 = 5029;
    const SM_ACTION_MIN               = 5030;
    const SM_ACTION_MAX               = 5031;
    const SM_ACTION2_MIN              = 5032;
    const SM_ACTION2_MAX              = 5033;
    const SM_HEAR                     = 5034;
    const SM_FEATURECHANGED           = 5035; //容貌??特征??改变
    const SM_USERNAME                 = 5036; //用户名
    const SM_WINEXP                   = 5037;
    const SM_LEVELUP                  = 5038;
    const SM_DAYCHANGING              = 5039;
    const SM_LOGON                    = 5040; //登录
    const SM_NEWMAP                   = 5041; //地图
    const SM_ABILITY                  = 5042; //能力
    const SM_HEALTHSPELLCHANGED       = 5043;
    const SM_MAPDESCRIPTION           = 5044; //地图形容,地图描述
    const SM_SPELL2                   = 5045;
    const SM_SYSMESSAGE               = 5046; //系统信息
    const SM_GROUPMESSAGE             = 5047;
    const SM_CRY                      = 5048;
    const SM_WHISPER                  = 5049;
    const SM_GUILDMESSAGE             = 5050;
    const SM_ADDITEM                  = 5051;
    const SM_BAGITEMS                 = 5052; //背包物品
    const SM_DELITEM                  = 5053;
    const SM_UPDATEITEM               = 5054;
    const SM_UPDATEITEMEX             = 5055;
    const SM_ADDMAGIC                 = 5056;
    const SM_SENDMYMAGIC              = 5057; ////我所会的魔法
    const SM_DELMAGIC                 = 5058;
    const SM_CERTIFICATION_FAIL       = 5059;
    const SM_ID_NOTFOUND              = 5060;
    const SM_PASSWD_FAIL              = 5061; //登录失败
    const SM_NEWID_SUCCESS            = 5062; //注册成功
    const SM_NEWID_FAIL               = 5063; //注册失败
    const SM_CHGPASSWD_SUCCESS        = 5064; //修改密码成功
    const SM_CHGPASSWD_FAIL           = 5065; //修改密码失败
    const SM_GETBACKPASSWD_SUCCESS    = 5066; //找回密码成功
    const SM_GETBACKPASSWD_FAIL       = 5067;
    const SM_DELHUM                   = 5068;
    const SM_RENEWHUM                 = 5069; //恢复角色
    const SM_QUERYCHR                 = 5070; //返回角色
    const SM_NEWCHR_SUCCESS           = 5071;
    const SM_NEWCHR_FAIL              = 5072;
    const SM_DELCHR_SUCCESS           = 5073;
    const SM_DELCHR_FAIL              = 5074;
    const SM_STARTPLAY                = 5075;
    const SM_STARTFAIL                = 5076;
    const SM_QUERYCHR_FAIL            = 5077;
    const SM_OUTOFCONNECTION          = 5078;
    const SM_PASSOK_SELECTSERVER      = 5079; //登录成功选择服务器
    const SM_SELECTSERVER_OK          = 5080;
    const SM_NEEDUPDATE_ACCOUNT       = 5081;
    const SM_UPDATEID_SUCCESS         = 5082;
    const SM_UPDATEID_FAIL            = 5083;
    const SM_DROPITEM_SUCCESS         = 5084;
    const SM_DROPITEM_FAIL            = 5085;
    const SM_ITEMSHOW                 = 5086;
    const SM_ITEMHIDE                 = 5087;
    const SM_OPENDOOR_OK              = 5088;
    const SM_OPENDOOR_LOCK            = 5089;
    const SM_CLOSEDOOR                = 5090;
    const SM_TAKEON_OK                = 5091;
    const SM_TAKEON_FAIL              = 5092;
    const SM_TAKEOFF_OK               = 5093;
    const SM_TAKEOFF_FAIL             = 5094;
    const SM_SENDUSEITEMS             = 5095; //身上穿戴物品
    const SM_WEIGHTCHANGED            = 5096;
    const SM_CHANGEMAP                = 5098;
    const SM_EAT_OK                   = 5099;
    const SM_EAT_FAIL                 = 5100;
    const SM_BUTCH                    = 5101;
    const SM_MAGICFIRE                = 5102;
    const SM_MAGICFIRE_FAIL           = 5103;
    const SM_MAGIC_LVEXP              = 5104;
    const SM_BAG_DURACHANGE           = 5105;
    const SM_DURACHANGE               = 5106;
    const SM_MERCHANTSAY              = 5107;
    const SM_MERCHANTDLGCLOSE         = 5108;
    const SM_SENDGOODSLIST            = 5109;
    const SM_GETRETURNITEMS           = 5110;
    const SM_MAPAPOISE                = 5111;
    const SM_USERSELLITEM_OK          = 5112;
    const SM_USERSELLITEM_FAIL        = 5113;
    const SM_BUYITEM_SUCCESS          = 5114;
    const SM_BUYITEM_FAIL             = 5115;
    const SM_SENDDETAILGOODSLIST      = 5116;
    const SM_GOLDCHANGED              = 5117;
    const SM_ITEMSTRENGTHEN           = 5118;
    const SM_USERKEYSETUP             = 5119; //用户密钥设置
    const SM_CHANGENAMECOLOR          = 5120;
    const SM_CHARSTATUSCHANGED        = 5121; //角色状态改变
    const SM_SENDNOTICE               = 5122; //发送公告
    const SM_GROUPMODECHANGED         = 5123;
    const SM_CREATEGROUP_OK           = 5124;
    const SM_CREATEGROUP_FAIL         = 5125;
    const SM_GROUPADDMEM_OK           = 5126;
    const SM_GROUPDELMEM_OK           = 5127;
    const SM_GROUPADDMEM_FAIL         = 5128;
    const SM_GROUPDELMEM_FAIL         = 5129;
    const SM_GROUPCANCEL              = 5130;
    const SM_GROUPMEMBERS             = 5131;
    const SM_USERSHOPSAY              = 5132;
    const SM_USERREPAIRITEM_OK        = 5133;
    const SM_USERREPAIRITEM_FAIL      = 5134;
    const SM_OPENARMSTRENGTHENDLG     = 5135;
    const SM_DEALMENU                 = 5136;
    const SM_DEALTRY_FAIL             = 5137;
    const SM_DEALADDITEM_OK           = 5138;
    const SM_DEALADDITEM_FAIL         = 5139;
    const SM_DEALDELITEM_OK           = 5140;
    const SM_DEALDELITEM_FAIL         = 5141;
    const SM_DEALCANCEL               = 5142;
    const SM_DEALREMOTEADDITEM        = 5143;
    const SM_DEALREMOTEDELITEM        = 5144;
    const SM_DEALCHGGOLD_OK           = 5145;
    const SM_DEALCHGGOLD_FAIL         = 5146;
    const SM_DEALREMOTECHGGOLD        = 5147;
    const SM_DEALSUCCESS              = 5148;
    const SM_STORAGEGOLDCHANGE        = 5149;
    const SM_STORAGE_OK               = 5150;
    const SM_STORAGE_FAIL             = 5152;
    const SM_SAVEITEMLIST             = 5153;
    const SM_TAKEBACKSTORAGEITEM_OK   = 5154;
    const SM_TAKEBACKSTORAGEITEM_FAIL = 5155;
    const SM_BUYRETURNITEM_OK         = 5151;
    const SM_BUYRETURNITEM_FAIL       = 5156;
    const SM_AREASTATE                = 5157; //地区状态
    const SM_MYSTATUS                 = 5158;
    const SM_DELITEMS                 = 5159;
    const SM_READMINIMAP_OK           = 5160;
    const SM_READMINIMAP_FAIL         = 5161;
    const SM_SENDUSERMAKEDRUGITEMLIST = 5162;
    const SM_MAKEDRUG                 = 5163;
    const SM_GOLDPOINTCHANGED         = 5164;
    const SM_GUILDCHANGE              = 5165;
    const SM_SENDUSERSTATE            = 5166;
    const SM_SUBABILITY               = 5167; //附属性(潜力)
    const SM_OPENGUILDDLG             = 5168;
    const SM_OPENGUILDDLG_FAIL        = 5169;
    const SM_SENDGUILDMEMBERLIST      = 5170;
    const SM_GUILDADDMEMBER_OK        = 5171;
    const SM_GUILDADDMEMBER_FAIL      = 5172;
    const SM_GUILDDELMEMBER_OK        = 5173;
    const SM_GUILDDELMEMBER_FAIL      = 5174;
    const SM_GUILDRANKUPDATE_FAIL     = 5175;
    const SM_BUILDGUILD_OK            = 5176;
    const SM_BUILDGUILD_FAIL          = 5177;
    const SM_DONATE_OK                = 5178;
    const SM_DONATE_FAIL              = 5179;
    const SM_MENU_OK                  = 5180;
    const SM_GUILDMAKEALLY_OK         = 5181;
    const SM_GUILDMAKEALLY_FAIL       = 5182;
    const SM_GUILDBREAKALLY_OK        = 5183;
    const SM_GUILDBREAKALLY_FAIL      = 5184;
    const SM_DLGMSG                   = 5185;
    const SM_SPACEMOVE_HIDE           = 5186;
    const SM_SPACEMOVE_SHOW           = 5187;
    const SM_RECONNECT                = 5188;
    const SM_GHOST                    = 5189;
    const SM_SHOWEVENT                = 5190;
    const SM_HIDEEVENT                = 5191;
    const SM_SPACEMOVE_HIDE2          = 5192;
    const SM_SPACEMOVE_SHOW2          = 5193;
    const SM_ADJUST_BONUS             = 5195;
    const SM_GETSHOPLIST              = 5228;
    const SM_CLIENTBUYITEM            = 5229;
    const SM_TAXISLIST                = 5230;
    const SM_TAXISLIST_FAIL           = 5231;
    const SM_OPENHEALTH               = 5232;
    const SM_CLOSEHEALTH              = 5233;
    const SM_BREAKWEAPON              = 5234;
    const SM_INSTANCEHEALGUAGE        = 5235;
    const SM_CHANGEFACE               = 5236;
    const SM_VERSION_FAIL             = 5237;
    const SM_ITEMUPDATE               = 5238;
    const SM_MONSTERSAY               = 5239;
    const SM_EXCHGTAKEON_OK           = 5240;
    const SM_EXCHGTAKEON_FAIL         = 5241;
    const SM_TEST                     = 5242;
    const SM_THROW                    = 5243;
    const SM_40                       = 5244;
    const SM_41                       = 5245;
    const SM_42                       = 5246;
    const SM_43                       = 5247;
    const SM_HORSERUN                 = 5248;
    const SM_716                      = 5249;
    const SM_PASSWORD                 = 5250;
    const SM_PLAYDICE                 = 5251;
    const SM_PASSWORDSTATUS           = 5252;
    const SM_GAMEGOLDNAME             = 5253; //游戏金币名称
    const SM_SERVERCONFIG             = 5254; //服务器配置
    const SM_GETREGINFO               = 5255;
    const SM_NEEDPASSWORD             = 5256;
    const SM_SHOWEFFECT               = 5257;
    const SM_HINTMSG                  = 5258;
    const SM_GROUPINFO1               = 5259;
    const SM_GROUPINFO2               = 5260;
    const SM_BAG_DURACHANGE2          = 5261;
    const SM_CHECKMSG                 = 5262;
    const SM_GROUPADDITEM             = 5263;
    const SM_MAKEITEM                 = 5264;
    const SM_USERSHOPCHANGE           = 5265;
    const SM_GAMEGOLDNAME2            = 5266; //游戏金币名称
    const SM_GETSAYITEM               = 5267;
    const SM_CHECKMATRIXCARD          = 5268;
    const SM_FRIEND_LOGIN             = 5269;
    const SM_EMAIL                    = 5270;
    const SM_CHANGEITEMDURA_OK        = 5271;
    const SM_CHANGEITEMDURA_FAIL      = 5272;
    const SM_NAKEDABILITY             = 5273; //裸身能力
    const SM_REALITYINFO              = 5274; //健康信息
    const SM_UPLOADUSERPHOTO          = 5275;
    const SM_UPLOADUSERPHOTO_FAIL     = 5276;
    const SM_TAKEOFFADDBAG_OK         = 5277;
    const SM_TAKEOFFADDBAG_FAIL       = 5278;
    const SM_TAKEONADDBAG_OK          = 5279;
    const SM_TAKEONADDBAG_FAIL        = 5280;
    const SM_SENDADDBAGITEMS          = 5281;
    const SM_GUILDGOLDCHANGE_FAIL     = 5282;
    const SM_USERSHOPGOLDCHANGE       = 5283;
    const SM_USEROPENSHOP             = 5284;
    const SM_BUYUSERSHOP              = 5097;
    const SM_GETUSERSHOPLIST          = 5285;
    const SM_USERSHOPITEMCHANGE       = 5286;
    const SM_STORAGEINFO              = 5287;
    const SM_GETBACKPASSWORD          = 5288;
    const SM_110                      = 5289;
    const SM_111                      = 5290;
    const SM_112                      = 5291;
    const SM_113                      = 5292;
    const SM_122                      = 5293;
    const SM_56                       = 5294;
    const SM_RUSHCBO                  = 5295;
    const SM_LEAP                     = 5296;
    const SM_SHOWBAR                  = 5297;
    const SM_UNSEAL                   = 5298;
    const SM_UNSEAL_OK                = 5299;
    const SM_BAGUSEITEM               = 5300;
    const SM_CLIENTBUYSHOPITEM        = 5301;
    const SM_GAMESETUPINFO            = 5302; //游戏设定
    const SM_BUGLE                    = 5303;
    const SM_UPDATEUSERITEM           = 5304;
    const SM_MAGICFIRE_CBO            = 5305;
    const SM_DOCTORALIVE              = 5306;
    const SM_MISSIONINFO              = 5307; //任务信息
    const SM_AUTOMOVE                 = 5308;
    const SM_SERVERTIME               = 5309; //服务器时间
    const SM_APPEND                   = 5310;
    const SM_APPENDCHECK_OK           = 5311;
    const SM_APPENDCHECK_FAIL         = 5312;
    const SM_APPENDPLIST              = 5313;
    const SM_APPENDMLIST              = 5314;
    const SM_APPENDDATA               = 5315;
    const SM_APPENDUPDATA             = 5316;
    const SM_APPENDDEL                = 5317;
    const SM_APPENDEX                 = 5318;
    const SM_APPENDCLOSE              = 5319;
    const SM_APPENDGLIST              = 5320;
    const SM_APPENDOBJECTCLOSE        = 5321;
    const SM_SENDINFO                 = 5322;
    const SM_FBTIME                   = 5323;
    const SM_OPENBOX                  = 5324;
    const SM_OPENBOXINFO              = 5325;
    const SM_CLOSEBAR                 = 5326;
    const SM_TAKEON_AUTO              = 5327;
    const SM_CHANGEMAP_OLD            = 5328;
    const SM_CHANGEEFFIGYSTATE        = 5329;
    const SM_GETUSERSHOPLIST_OFFLINE  = 5330;
    const SM_CLIENTDATAFILE           = 5331;
    const SM_MAKEMAGIC                = 5332; //制造魔法
    const SM_MAKEDRUG_AUTO            = 5333;
    const SM_SPACEMOVE_SHOW3          = 5334;
    const SM_SPACEMOVE_HIDE3          = 5335;
    const SM_HIT_2                    = 5336;
    const SM_HIT_3                    = 5337;
    const SM_HIT_4                    = 5338;
    const SM_HIT_5                    = 5339;
    const SM_MONMAGIC                 = 5340;
    const SM_GETTOPINFO               = 5341;
    const SM_GAMEGOLDNAME3            = 5342;
    const SM_TOPMSG                   = 5343;
    const SM_REMOVESTONE              = 5344;
    const SM_REMOVESTONE_BACK         = 5345;
    const SM_AD_FRAME                 = 5346;
    const SM_AD_EXIT                  = 5347;
    const SM_OPENURL                  = 5348;
    const SM_FILTERINFO               = 5349; //过滤器信息
    const SM_CENTERMSG                = 5350;
    const SM_STATUSMODE               = 5351; //状态模式
    const SM_LONGICEHIT_L             = 5352;
    const SM_LONGICEHIT_S             = 5353;
    const SM_MAGICMOVE                = 5354;
    const SM_MAGICFIR                 = 5355;
    const SM_SETITEMS                 = 5356;
    const SM_HINTDATA                 = 5357;
    const SM_REFICONINFO              = 5358;
    const SM_REFHUMLOOK               = 5359;
    const SM_CLEARCENTERMSG           = 5360;
    const SM_OPENARMABILITYMOVEDLG    = 5361;
    const SM_ITEMABILITYMOVE          = 5362;
    const SM_COMPOUNDINFOS            = 5363; //复合信息
    const SM_COMPOUNDITEM             = 5364;
    const SM_ABILITYMOVESET           = 5365; //能力移动设定

}
