using System;
using System.Collections.Generic;
using System.Linq;
using System.IO;
using System.Windows;
using System.Windows.Navigation;
using System.Windows.Controls;
using System.Windows.Documents;
using Microsoft.Xna.Framework.Input.Touch;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Audio;
using System.Xml.Serialization;
using TARY_Library_Silverlight;
using TARY_Library;

namespace hero
{
    public partial class GamePage : PhoneApplicationPage
    {

        ContentManager contentManager;
        GameTimer timer;
        SpriteBatch spriteBatch;
        UIElementRenderer elementRenderer;  // silverlight 元素绘制器


        PhoneApplicationPage PAP = new PhoneApplicationPage();//取得背景顏色用
        bool PAPbgWhite = true;//是否為白色背景


        public static TARY_RANDOM randObj=new TARY_RANDOM();
        public static TouchLocation touchLocation;
        public static TouchCollection touchState; //觸控式感應器
        

        public static SoundEffect effectballM2;//火球
        public static SoundEffect effectHerofires, effectHerofired, effectHeroDead;
        public static SoundEffect effectMonsterfires, effectMonsterfired, effectMonsterDead;
        public static SoundEffect effectgetHP, effectgetPower, effectgetThunder;

        public static Texture2D picBOSS2, picBOSS4_LEFT, picBOSS4_RIGHT;
        public static Texture2D[] picBOSS1, picBOSS3, picBOSS4, picBOSS5, picBOSS5_G, picBOSS51_G, picBOSS6, picBOSS7;


        public static Texture2D picMONSTER1_A, picMONSTER1_B, picMONSTER1_C, picMONSTER1_D;
        public static Texture2D[] picMONSTER3_A, picMONSTER3_B, picMONSTER3_C, picMONSTER3_D;
        public static Texture2D[] picMONSTER31_A, picMONSTER31_B, picMONSTER31_C, picMONSTER31_D;
        public static Texture2D picMONSTER4_A, picMONSTER4_B, picMONSTER4_C, picMONSTER4_D;
        public static Texture2D picMONSTER41_A, picMONSTER41_B, picMONSTER41_C, picMONSTER41_D;
        public static Texture2D picMONSTER5_A, picMONSTER5_B, picMONSTER5_C, picMONSTER5_D;

        public static Texture2D[] picMONSTER7_A, picMONSTER7_B, picMONSTER7_C;


        public static Texture2D picBall;
        public static Texture2D[] picBallA, picBallB, picBallC;
        public static Texture2D[] picBallM2, picBallM3;


        public static Texture2D picGAMEEND, picSCORE, picGAMEOVER, picBAR, picBAR2, picHERO, picLOVES, picLOVES2, picLOVE, picLOVE2, picLOVESS, picLOVESS2, picLEVEL, picStar1, picStar2, picStar3, picStar4, picStar5, picStar6, picStar7, picStar8;
        public static Texture2D[] picHERO_DEAD = new Texture2D[8];
        public static Texture2D[] picNum = new Texture2D[17];
        public static Texture2D[] picNum2 = new Texture2D[17];
        
        public static Texture2D[] picOneP;
        public static Texture2D[] picOneP2;//星星
        public static Texture2D[] picOneP4;//閃電
        public static Texture2D[] picStarBar;//能量等級

        //主要角色宣告
        public static string LOCAL = "選單";//位置
        public static string LOCAL2 = "選單";//專門紀錄 遊戲中回上一個位置
        public static HERO R_HERO, _HERO;
        public static LV R_LV, _LV;
        public static MENU_DEAD R_MENU_DEAD, _MENU_DEAD;
        public static GAME_END R_GAME_END, _GAME_END;
        public static BAR R_BAR, _BAR;
        public static MENU R_MENU, _MENU;
        public static STOP R_STOP;
        public static BG R_BG, _BG;
        public static MonsterFired R_MFired, _MFired;
        public static MonsterThg R_MonsterThg, _MonsterThg;
        public static bool tR_MENU = false;
        public static bool Thunder = false; //吃到閃電 背景變白一次
        //能力值最初 A,B,C,D,E 系統最初能力值    A2,B2,C2,D2,E2代表 
        public static Vector2 HERO_LOC =new Vector2(300, 600);
        public static int HERO_S = 0;//難易度 0=輕鬆 1=正常 2=挑戰
        public static int HERO_SCORE = 0, HERO_SCORE2 = 0;//分數 HERO_SCORE2=暫存讀檔分數(防止有人洗錢)
        public static int HERO_LIFE = 0, HERO_LIFE2 = 0;//英雄生命
        public static int HERO_R = 0, HERO_Money = 0, HERO_Money2=0;//能力值及現金餘額
        public static int HERO_LV = 0, HERO_FINAL = 0;//第一關與最後一關
        public static int HERO_A = 1, HERO_A2 = 0;//攻擊力
        public static int HERO_B = 30, HERO_B2 = 0;//連續發射
        public static int HERO_C = 7, HERO_C2 = 0;//子彈數量
        public static int HERO_D = 2, HERO_D2 = 0;//移動速度
        public static int HERO_E = 3, HERO_E2 = 0;//HP量



        public GamePage()
        {
            InitializeComponent();
  
            // 從應用程式取得內容管理員
            contentManager = (Application.Current as App).Content;
            LayoutUpdated += new EventHandler(GamePage_LayoutUpdated);
            // 為這個頁面建立計時器
            timer = new GameTimer();
            timer.UpdateInterval = TimeSpan.FromTicks(222222);
            timer.Update += OnUpdate;
            timer.Draw += OnDraw;
            //Close_Menu(); 留意
            randObj.setRandom();



            //判定使用者手機的背景顏色
            if ((PAP.Resources["PhoneBackgroundColor"]).ToString() == "#FF000000")
            {
                PAPbgWhite = false;
            }

        }

        protected override void OnNavigatedTo(NavigationEventArgs e)
        {
            // 設定圖形裝置的共用模式，以開啟 XNA 呈現
            SharedGraphicsDeviceManager.Current.GraphicsDevice.SetSharingMode(true);

            // 建立可用來繪製紋理的新 SpriteBatch。
            spriteBatch = new SpriteBatch(SharedGraphicsDeviceManager.Current.GraphicsDevice);


            //音效＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

            effectgetHP = contentManager.Load<SoundEffect>("music/getHP");
            effectgetPower = contentManager.Load<SoundEffect>("music/getPower");
            effectgetThunder = contentManager.Load<SoundEffect>("music/getHP");


            effectballM2 = contentManager.Load<SoundEffect>("music/ball_M2");
            effectMonsterfired = contentManager.Load<SoundEffect>("music/mFired");
            effectMonsterfires = contentManager.Load<SoundEffect>("music/mFires");
            effectMonsterDead = contentManager.Load<SoundEffect>("music/mDead");

            effectHerofired = contentManager.Load<SoundEffect>("music/hFired");
            effectHerofires = contentManager.Load<SoundEffect>("music/hFires");
            effectHeroDead = contentManager.Load<SoundEffect>("music/hFired");//與扣血相同

            picOneP = new Texture2D[] { contentManager.Load<Texture2D>("oneP1"), contentManager.Load<Texture2D>("oneP2_A"), contentManager.Load<Texture2D>("oneP3") };
            picOneP2 = new Texture2D[] { contentManager.Load<Texture2D>("oneP2_A"), contentManager.Load<Texture2D>("oneP2_B"), contentManager.Load<Texture2D>("oneP2_C") };

            picOneP4 = new Texture2D[] { contentManager.Load<Texture2D>("oneP4_A"), contentManager.Load<Texture2D>("oneP4_B") };

            picStarBar = new Texture2D[] { contentManager.Load<Texture2D>("starS1"), contentManager.Load<Texture2D>("starS2") };




            picGAMEEND = contentManager.Load<Texture2D>("GAMEEND");
            picSCORE = contentManager.Load<Texture2D>("SCORE");

            picBOSS1 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS1_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS1_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS1_C") };
            picBOSS2 = contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS2");


            picBOSS3 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS3_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS3_B") };
            picBOSS4 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_C"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_D") };
            picBOSS4_LEFT = contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_LEFT");
            picBOSS4_RIGHT = contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS4_RIGHT");

            picBOSS5 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_C"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_D"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_E"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_F") };
            picBOSS5_G = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_G1"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_G2"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS5_G3")};
            picBOSS51_G = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS51_G1"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS51_G2"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS51_G3") };


            picBOSS6 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_A_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_A_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_A_C"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_B_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_B_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_B_C"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_C_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_C_B"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS6_C_C") };


            picBOSS7 = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS7_A"), contentManager.Load<Texture2D>("MONSTER/BOSS/BOSS7_B")};


            picMONSTER1_A = contentManager.Load<Texture2D>("MONSTER/MONSTER1/MONSTER1_A");
            picMONSTER1_B = contentManager.Load<Texture2D>("MONSTER/MONSTER1/MONSTER1_B");
            picMONSTER1_C = contentManager.Load<Texture2D>("MONSTER/MONSTER1/MONSTER1_C");
            picMONSTER1_D = contentManager.Load<Texture2D>("MONSTER/MONSTER1/MONSTER1_D");


            picMONSTER3_A = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_A_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_A_B") };
            picMONSTER3_B = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_B_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_B_B") };
            picMONSTER3_C = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_C_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_C_B") };
            picMONSTER3_D = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_D_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_D_B") };



            picMONSTER31_A = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_A_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_A_B") };
            picMONSTER31_B = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_B_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_B_B") };
            picMONSTER31_C = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_C_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_C_B") };
            picMONSTER31_D = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_D_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER3/MONSTER3_D_B") };



            picMONSTER4_A = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER4_A");
            picMONSTER4_B = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER4_B");
            picMONSTER4_C = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER4_C");
            picMONSTER4_D = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER4_D");


            picMONSTER41_A = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER41_A");
            picMONSTER41_B = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER41_B");
            picMONSTER41_C = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER41_C");
            picMONSTER41_D = contentManager.Load<Texture2D>("MONSTER/MONSTER4/MONSTER41_D");


            picMONSTER5_A = contentManager.Load<Texture2D>("MONSTER/MONSTER5/MONSTER5_A");
            picMONSTER5_B = contentManager.Load<Texture2D>("MONSTER/MONSTER5/MONSTER5_B");
            picMONSTER5_C = contentManager.Load<Texture2D>("MONSTER/MONSTER5/MONSTER5_C");
            picMONSTER5_D = contentManager.Load<Texture2D>("MONSTER/MONSTER5/MONSTER5_D");


            picMONSTER7_A = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_A_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_A_B") };
            picMONSTER7_B = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_B_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_B_B") };
            picMONSTER7_C = new Texture2D[] { contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_C_A"), contentManager.Load<Texture2D>("MONSTER/MONSTER7/MONSTER7_C_B") };





            //英雄子彈種類
            picBallA = new Texture2D[] { contentManager.Load<Texture2D>("ballA1"), contentManager.Load<Texture2D>("ballA2"), contentManager.Load<Texture2D>("ballA3") };
            picBallB = new Texture2D[] { contentManager.Load<Texture2D>("ballB1"), contentManager.Load<Texture2D>("ballB2"), contentManager.Load<Texture2D>("ballB3") };
            picBallC = new Texture2D[] { contentManager.Load<Texture2D>("ballC1"), contentManager.Load<Texture2D>("ballC2"), contentManager.Load<Texture2D>("ballC3") };

            picBall = picBallC[2];
            picBallM2 = new Texture2D[] { contentManager.Load<Texture2D>("BallM2_A"), contentManager.Load<Texture2D>("BallM2_B"), contentManager.Load<Texture2D>("BallM2_C") };
            picBallM3 = new Texture2D[] { contentManager.Load<Texture2D>("BallM3_A"), contentManager.Load<Texture2D>("BallM3_B"), contentManager.Load<Texture2D>("BallM3_C") };


            //-----------
            picHERO = contentManager.Load<Texture2D>("HERO");
            picBAR = contentManager.Load<Texture2D>("BAR");
            picBAR2 = contentManager.Load<Texture2D>("BAR2");
            picLOVE = contentManager.Load<Texture2D>("LOVE");
            picLOVE2 = contentManager.Load<Texture2D>("LOVE2");
            picLOVES = contentManager.Load<Texture2D>("LOVES");
            picLOVES2 = contentManager.Load<Texture2D>("LOVES2");
            picLOVESS = contentManager.Load<Texture2D>("LOVESS");
            picLOVESS2 = contentManager.Load<Texture2D>("LOVESS2");
            picLEVEL = contentManager.Load<Texture2D>("LEVEL");
            picGAMEOVER = contentManager.Load<Texture2D>("GAMEOVER");

            picStar1 = contentManager.Load<Texture2D>("STAR1");
            picStar2 = contentManager.Load<Texture2D>("STAR2");
            picStar3 = contentManager.Load<Texture2D>("STAR3");
            picStar4 = contentManager.Load<Texture2D>("STAR4");
            picStar5 = contentManager.Load<Texture2D>("STAR5");
            picStar6 = contentManager.Load<Texture2D>("STAR6");
            picStar7 = contentManager.Load<Texture2D>("STAR7");
            picStar8 = contentManager.Load<Texture2D>("STAR8");


            for (int i = 0; i < picHERO_DEAD.Count(); i++)
            {
                picHERO_DEAD[i] = contentManager.Load<Texture2D>("P/p" + (i+1).ToString());
            }

            for (int i = 0; i < picNum.Count(); i++)
            {
                picNum[i] = contentManager.Load<Texture2D>("lib/number2/num" + i.ToString());
                picNum2[i] = contentManager.Load<Texture2D>("lib/number3/num" + i.ToString());
            }


            // TODO: 在此處使用 this.content 載入遊戲內容




            //主要角色＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            if (_BG != null) { R_BG = _BG; }
            else { R_BG = new BG(picStar1); }

            if (_BAR != null) { R_BAR = _BAR; }
            else { R_BAR = new BAR(); }

            if (_HERO != null){ R_HERO = _HERO; }　
            else { R_HERO = new HERO(HERO_LOC);}


            if (_LV != null) { R_LV = _LV; }

            if (_MENU != null) { R_MENU = _MENU; }
            else { R_MENU = new MENU(); PANEL_MENU.Children.Add(R_MENU); }



            if (_MENU_DEAD != null) { R_MENU_DEAD = _MENU_DEAD; }

            if (_GAME_END != null) { R_GAME_END = _GAME_END; }



            if (_MFired != null) { R_MFired = _MFired; }
            else { R_MFired = new MonsterFired(); }

            if (_MonsterThg != null) { R_MonsterThg = _MonsterThg; }
            else { R_MonsterThg = new MonsterThg(); }



            R_STOP = new STOP();
            if (PANEL_STOP.Children.Count==0)
            {
                 PANEL_STOP.Children.Add(R_STOP);
            }




            // 啟動計時器
            timer.Start();

            base.OnNavigatedTo(e);
        }

        protected override void OnNavigatedFrom(NavigationEventArgs e)
        {
            // 停止計時器
            timer.Stop();

            //暫存遊戲
            _BG = R_BG;
            _HERO = R_HERO;
            _LV = R_LV;
            _BAR = R_BAR;
            _MENU = R_MENU;
            _MENU_DEAD = R_MENU_DEAD;
            _MFired = R_MFired;

            _MonsterThg = R_MonsterThg;
            // 設定圖形裝置的共用模式，以關閉 XNA 呈現
            SharedGraphicsDeviceManager.Current.GraphicsDevice.SetSharingMode(false);


            base.OnNavigatedFrom(e);
        }

        /// <summary>
        /// 允許頁面執行邏輯，例如更新環境、
        /// 檢查衝突、收集輸入和播放音訊。
        /// </summary>
        private void OnUpdate(object sender, GameTimerEventArgs e)
        {
            touchState = TouchPanel.GetState();

            // TODO: 在此處加入更新邏輯
            
            if (LOCAL=="遊戲")
            {


                if (PANEL_STOP.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_STOP.Visibility = System.Windows.Visibility.Collapsed;
                }


                if (PANEL_MENU.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_MENU.Visibility = System.Windows.Visibility.Collapsed;
                }

                if(R_LV==null){
                    R_LV = new LV(HERO_LV); 
                }


                R_LV.update();//關卡怪物
                R_HERO.update();//畫英雄
                R_MFired.update();//怪物攻擊球
                R_BAR.update();
                R_MonsterThg.update();//寶物
                R_BG.update();//背景
            }
            else if (LOCAL == "遊戲暫停")
            {


                if (PANEL_MENU.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_MENU.Visibility = System.Windows.Visibility.Collapsed;
                }

                if (PANEL_STOP.Visibility == System.Windows.Visibility.Collapsed)
                {
                    PANEL_STOP.Visibility = System.Windows.Visibility.Visible;
                }
            }
            else if (LOCAL == "選單")
            {


                if (PANEL_STOP.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_STOP.Visibility = System.Windows.Visibility.Collapsed;
                }


                if (PANEL_MENU.Visibility == System.Windows.Visibility.Collapsed)
                {
                    PANEL_MENU.Visibility = System.Windows.Visibility.Visible;
                }

                if (tR_MENU)
                {
                    R_MENU.Update();//重新撈取 英雄資料
                    tR_MENU = false;
                }

                MENU_UPDATE();//不斷一直抓取資料
 
            }
            else if (LOCAL == "死亡")
            {
                R_MENU_DEAD.update();
            }
            else if (LOCAL == "離開遊戲")
            {

                    myHERO SaveGame = new myHERO();
                    SaveGame.Save();//將所有要存檔的資料彙整
                    MemoryStream ms = new MemoryStream();
                    Serialize(ms, SaveGame);
                    ms.Position = 0;
                    ms.Close();


                    byte[] by = ms.ToArray();


                    //-------------------------------
                    DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);


                    var tContacts = from Contacts in tDBHandler.Contacts
                                    where Contacts.CNAME == "HERO"
                                    select Contacts;

                    Contacts A = tContacts.First();
                    A.XML = by;
                    tDBHandler.SubmitChanges();

                GamePage.R_BAR.PowerLv = 0;//將英雄能源清除


                if(NavigationService.CanGoBack)
                    NavigationService.GoBack();
            }
            else if (LOCAL == "死亡離開遊戲")
            {
                GamePage.R_BAR.PowerLv = 0;//將英雄能源清除
                if (NavigationService.CanGoBack)
                    NavigationService.GoBack();
            }
            else if (LOCAL == "破關")
            {
                R_GAME_END.update();
            }
            else if(LOCAL == "新遊戲")
            {

                if (PANEL_NEWGAME.Visibility == System.Windows.Visibility.Collapsed)
                {
                    PANEL_NEWGAME.Visibility = System.Windows.Visibility.Visible;
                }



                if (PANEL_STOP.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_STOP.Visibility = System.Windows.Visibility.Collapsed;
                }


                if (PANEL_MENU.Visibility == System.Windows.Visibility.Visible)
                {
                    PANEL_MENU.Visibility = System.Windows.Visibility.Collapsed;
                }

            }


            


        }

        /// <summary>
        /// 允許頁面繪製自身。
        /// </summary>
        private void OnDraw(object sender, GameTimerEventArgs e)
        {
            if (PAPbgWhite)
            {
                SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.White);
            }
            else
            {
                SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.Black);
            }
            if (LOCAL == "遊戲")
            {
                //閃電特效
                if (Thunder)
                {
                    SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.White);
                    Thunder = false;
                }
                else
                {
                    SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.Black);
                }

                spriteBatch.Begin();
                R_BG.Draw(spriteBatch);//背景
                R_MonsterThg.Draw(spriteBatch);//寶物
                R_LV.Draw(spriteBatch);
                R_MFired.Draw(spriteBatch);//怪物攻擊球
                R_HERO.Draw(spriteBatch);
                R_BAR.Draw(spriteBatch);

                spriteBatch.End();
            }
            else if (LOCAL == "選單")
            {

                elementRenderer.Render();
                spriteBatch.Begin();
                spriteBatch.Draw(elementRenderer.Texture, Vector2.Zero, Color.White);
                spriteBatch.End();

            }
            else if (LOCAL == "遊戲暫停")
            {
                elementRenderer.Render();
                spriteBatch.Begin();
                spriteBatch.Draw(elementRenderer.Texture, Vector2.Zero, Color.White);
                spriteBatch.End();

            }
            else if (LOCAL == "死亡")
            {
                SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.Black);
                spriteBatch.Begin();
                R_MENU_DEAD.Draw(spriteBatch);
                spriteBatch.End();
            }
            else if(LOCAL =="破關")
            {
                SharedGraphicsDeviceManager.Current.GraphicsDevice.Clear(Color.Black);
                spriteBatch.Begin();
                R_GAME_END.Draw(spriteBatch);
                spriteBatch.End();
            }
            else if (LOCAL == "新遊戲")
            {
                elementRenderer.Render();
                spriteBatch.Begin();
                spriteBatch.Draw(elementRenderer.Texture, Vector2.Zero, Color.White);
                spriteBatch.End();
            }

            // TODO: 在此處加入繪圖程式碼
        }





        protected override void OnBackKeyPress(System.ComponentModel.CancelEventArgs e)
        {

            if(LOCAL == "新遊戲" ){
                return;
            }

            //不準按暫停的
            if (LOCAL == "死亡" || LOCAL == "破關" || (R_HERO.dead && LOCAL == "遊戲"))
            {
                e.Cancel = true;
                return;
            }
           




            if (LOCAL != "遊戲暫停")
            {
                LOCAL2 = LOCAL;
                LOCAL = "遊戲暫停";
            }else{
                LOCAL = LOCAL2;
            }
            
            e.Cancel = true;
        }


        void GamePage_LayoutUpdated(object sender, EventArgs e)
        {
            // 指定窗口的宽和高
            if ((ActualWidth > 0) && (ActualHeight > 0))
            {
                SharedGraphicsDeviceManager.Current.PreferredBackBufferWidth = (int)ActualWidth;
                SharedGraphicsDeviceManager.Current.PreferredBackBufferHeight = (int)ActualHeight;
            }

            // 实例化 silverlight 元素绘制器
            if (elementRenderer == null)
            {
                elementRenderer = new UIElementRenderer(this, (int)ActualWidth, (int)ActualHeight);
            }
        }


        public static void Serialize(Stream streamObject, object objForSerialization)
        {
            if (objForSerialization == null || streamObject == null)
                return;

            XmlSerializer serializer = new XmlSerializer(objForSerialization.GetType());
            serializer.Serialize(streamObject, objForSerialization);
        }




        private void ADD(object sender, RoutedEventArgs e)
        {

            Button btn = sender as Button;
            

            switch(btn.Name[0]){
                case 'A': R_MENU.ADD('A'); break;
                case 'B': R_MENU.ADD('B'); break;
                case 'C': R_MENU.ADD('C'); break;
                case 'D': R_MENU.ADD('D'); break;
                case 'E': R_MENU.ADD('E'); break;
            }
        }


        private void SUB(object sender, RoutedEventArgs e)
        {


            Button btn = sender as Button;


            switch (btn.Name[0])
            {
                case 'A': R_MENU.SUB('A'); break;
                case 'B': R_MENU.SUB('B'); break;
                case 'C': R_MENU.SUB('C'); break;
                case 'D': R_MENU.SUB('D'); break;
                case 'E': R_MENU.SUB('E'); break;
            }

        }



        void MENU_UPDATE()
        {
            TEXT1.Text = LanguageData.GMENU_M1 + R_MENU.v.ToString();//能力值點數
            textS.Text = LanguageData.GMENU_M2 + HERO_SCORE;//分數
            textA.Text = LanguageData.GMENU_M3 + HERO_Money;//金幣
            textB.Text = LanguageData.GMENU_M4 + HERO_LIFE;//戰機生命
            if (HERO_LV == 0)
            {
                textC.Text = "Level " + (HERO_LV + 1).ToString();
            }
            else
            {
                textC.Text = "Level " + (HERO_LV).ToString();
            }


            switch (GamePage.HERO_S)
            {
                case 0: textC.Text += " (" +LanguageData.GMENU_EASY+ ")"; break;
                case 1: textC.Text += " (" + LanguageData.GMENU_NORMAL+ ")"; break;
                case 2: textC.Text += " ("+ LanguageData.GMENU_HARD+")"; break;
            }

            A_NUM1.Text = R_MENU.A_num.ToString();
            B_NUM1.Text = R_MENU.B_num.ToString();
            C_NUM1.Text = R_MENU.C_num.ToString();
            D_NUM1.Text = R_MENU.D_num.ToString();
            E_NUM1.Text = R_MENU.E_num.ToString();


            A_NUM2.Text = R_MENU.A_num2.ToString();
            B_NUM2.Text = R_MENU.B_num2.ToString();
            C_NUM2.Text = R_MENU.C_num2.ToString();
            D_NUM2.Text = R_MENU.D_num2.ToString();
            E_NUM2.Text = R_MENU.E_num2.ToString();
        }





        private void buy1_Click(object sender, RoutedEventArgs e)
        {

            MessageBoxResult m = MessageBox.Show(LanguageData.GMENU_BUYR, LanguageData.GMENU_B, MessageBoxButton.OKCancel);

            if (m == MessageBoxResult.OK)
            {
                if (HERO_Money < 4800)
                {
                    MessageBox.Show(LanguageData.GMENU_NO);
                    return;
                }
                    HERO_R++;
                    R_MENU.v++;
                    HERO_Money -= 4800;
            }
        }

        private void buy2_Click(object sender, RoutedEventArgs e)
        {
            MessageBoxResult m = MessageBox.Show(LanguageData.GMENU_BUYLIFE, LanguageData.GMENU_B, MessageBoxButton.OKCancel);
            if (m == MessageBoxResult.OK)
            {
                if (HERO_Money < 9500)
                {
                    MessageBox.Show(LanguageData.GMENU_NO);
                    return;
                }
                HERO_LIFE++;
                HERO_Money -= 9500;
            }


        }

        private void NEWGame_btn_Click(object sender, RoutedEventArgs e)
        {

            myHERO myDATA;

            if (radioButton0.IsChecked==true)
            {
                myDATA = new myHERO();
                myDATA.newGameRead("輕鬆");

            }else
            if (radioButton1.IsChecked == true)
            {
                //已過試用期 - 判定app是否已購買
                if (TARY_Library_Silverlight.ProdKey.ProdPass())
                {
                    myDATA = new myHERO();
                    myDATA.newGameRead("正常");
                }
                else
                {
                    TARY_Library_Silverlight.ProdKey.ShowAppMarketplace();
                    return ;
                }
            }else
            {
                //已過試用期 - 判定app是否已購買
                if (TARY_Library_Silverlight.ProdKey.ProdPass())
                {
                    myDATA = new myHERO();
                    myDATA.newGameRead("困難");
                }
                else
                {
                    TARY_Library_Silverlight.ProdKey.ShowAppMarketplace();
                    return;
                }
            }

            tR_MENU = true;
            LOCAL = "選單";


            PANEL_NEWGAME.Visibility = System.Windows.Visibility.Collapsed;

        }











        private void MENU_START(object sender, RoutedEventArgs e)
        {
             R_MENU.Start();
        }


    }
}