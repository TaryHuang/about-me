using System;
using System.Collections.Generic;
using System.Linq;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Audio;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.GamerServices;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Input.Touch;
using Microsoft.Xna.Framework.Media;

namespace BOBO
{
    /// <summary>
    /// 這是您遊戲的主要型別
    /// </summary>
    public class Game1 : Microsoft.Xna.Framework.Game
    {
        GraphicsDeviceManager graphics;
        public static SpriteBatch P;
        public static Texture2D picZ1, picZ2, picZ3, picP1, picS1, picS2,picBG;
        public static Texture2D picStart, picExit, picBoard, picChangeBall, picChangeBall2, picBar;
        public static Texture2D picL, picL1, picL2, picL3;
        public static Texture2D[] picGameLv = new Texture2D[20];//選擇關卡圖片
        public static Texture2D[] picGameLv2 = new Texture2D[20];//選擇關卡圖片(被鎖住的)
        public static TouchCollection touchState; //觸控式感應器

        public static Texture2D picINFO;

        public static Texture2D picA25, picA20, picA15;
        public static Texture2D picB25, picB20, picB15;
        public static Texture2D picC25, picC20, picC15;
        public static Texture2D picSize, picSort;

        public static Texture2D[] picTimer = new Texture2D[10];
        public static Texture2D picTimerIcon, picTimerIcon2;

        INFO INFOV =new INFO();

        //換球設定
        public static Texture2D picballsort;
        public static Texture2D picballsortA1;
        public static Texture2D picballsortA0;
        public static Texture2D picballsortB1;
        public static Texture2D picballsortB0;
        public static Texture2D picballsortC1;
        public static Texture2D picballsortC0;
        public static Texture2D picballsort251;
        public static Texture2D picballsort250;
        public static Texture2D picballsort201;
        public static Texture2D picballsort200;
        public static Texture2D picballsort150;
        public static Texture2D picballsort151;




        //遊戲目前狀態旗標
        // 0=選單menu,1=選取關卡GameLv,2=開始遊戲
        public static int GameState=0;
        public static int Lv=0;//使用者所選取的關卡

        menu menu;
        public static Lv Game;
        public static GameLv gamelv;
        public static Board board;
        public static changeball changeBall;



        public Game1()
        {
            graphics = new GraphicsDeviceManager(this);
            Content.RootDirectory = "Content";
            graphics.IsFullScreen = true;//全螢幕
            graphics.SupportedOrientations = DisplayOrientation.LandscapeRight;
            // Windows Phone 預設的畫面播放速率為 30 fps。
            TargetElapsedTime = TimeSpan.FromTicks(333333);

            // 鎖定以延長電池壽命。
            InactiveSleepTime = TimeSpan.FromSeconds(1);
        }

        /// <summary>
        /// 允許遊戲先執行所需的初始化程序，再開始執行。
        /// 這是遊戲可查詢必要服務和載入任何非圖形相關內容
        /// 的地方。呼叫 base.Initialize 會列舉所有元件
        /// 並予以初始化。
        /// </summary>
        protected override void Initialize()
        {
            // TODO: 在此新增初始化邏輯

            //建立遊戲資料庫＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);
            if (tDBHandler.DatabaseExists() == false)
            {
                tDBHandler.CreateDatabase();

                Contacts tNewContact1 = new Contacts();
                tNewContact1.ERI = "SYSTEM";
                tNewContact1.LVNO = 1;//可用關卡 預設為1
                tNewContact1.SIZE = 0;//球體大小
                tNewContact1.SORT = 0;//球體款式



                List<Contacts> tAllConact = new List<Contacts>();
                tAllConact.Add(tNewContact1);
                tDBHandler.Contacts.InsertAllOnSubmit(tAllConact);
                //-----------------------------------------
                tDBHandler.SubmitChanges();
            }
            else
            {
                //刪除多餘的資料
                //先刪除舊資料

                var tContacts = from Contacts in tDBHandler.Contacts
                                where Contacts.ERI == "SYSTEM"
                                select Contacts;

                Contacts DATA = tContacts.First();

                var deleteOrderDetails = from Contacts2 in tDBHandler.Contacts2
                                         where Contacts2.T == 0 & Contacts2.LVNO < DATA.LVNO
                                         select Contacts2;

                foreach (var detail in deleteOrderDetails)
                {
                    tDBHandler.Contacts2.DeleteOnSubmit(detail);
                }

                tDBHandler.SubmitChanges();
            }


            picBG = Content.Load<Texture2D>("bg");
            picINFO = Content.Load<Texture2D>("INFO");

            picSize = Content.Load<Texture2D>("size");
            picSort = Content.Load<Texture2D>("sort");



            picA25 = Content.Load<Texture2D>("ballA1");
            picA20 = Content.Load<Texture2D>("ballA2");
            picA15 = Content.Load<Texture2D>("ballA3");

            picB25 = Content.Load<Texture2D>("ballB1");
            picB20 = Content.Load<Texture2D>("ballB2");
            picB15 = Content.Load<Texture2D>("ballB3");

            picC25 = Content.Load<Texture2D>("ballC1");
            picC20 = Content.Load<Texture2D>("ballC2");
            picC15 = Content.Load<Texture2D>("ballC3");

            picZ1 = Content.Load<Texture2D>("t1");
            picZ2 = Content.Load<Texture2D>("MONSTER1");//T2
            picZ3 = Content.Load<Texture2D>("t3");//T3
           
            picP1 = Content.Load<Texture2D>("pass");

            picBar = Content.Load<Texture2D>("Bar");
            
            picStart = Content.Load<Texture2D>("start");
            picExit = Content.Load<Texture2D>("exit");
            picBoard = Content.Load<Texture2D>("board");
            picChangeBall = Content.Load<Texture2D>("ChangeBall");
            picChangeBall2 = Content.Load<Texture2D>("ChangeBall2");

            picTimerIcon2 = Content.Load<Texture2D>("num-1");
            picTimerIcon = Content.Load<Texture2D>("num");

            picS1 = Content.Load<Texture2D>("board1");
            picS2 = Content.Load<Texture2D>("board2");
            for (int i = 0; i < picTimer.Length;i++ )
            {

                picTimer[i] = Content.Load<Texture2D>("num"+i.ToString());
            }








            picballsort = Content.Load<Texture2D>("ballsort");
            picballsortA1 = Content.Load<Texture2D>("ballsortA1");
            picballsortA0 = Content.Load<Texture2D>("ballsortA0");
            picballsortB1 = Content.Load<Texture2D>("ballsortB1");
            picballsortB0 = Content.Load<Texture2D>("ballsortB0");
            picballsortC0 = Content.Load<Texture2D>("ballsortC0");
            picballsortC1 = Content.Load<Texture2D>("ballsortC1");
            picballsort250 = Content.Load<Texture2D>("ballsort250");
            picballsort251 = Content.Load<Texture2D>("ballsort251");
            picballsort200 = Content.Load<Texture2D>("ballsort200");
            picballsort201 = Content.Load<Texture2D>("ballsort201");
            picballsort150 = Content.Load<Texture2D>("ballsort150");
            picballsort151 = Content.Load<Texture2D>("ballsort151");





            //破關畫面圖片
            picL = Content.Load<Texture2D>("L");
            picL1 = Content.Load<Texture2D>("L1");
            picL2 = Content.Load<Texture2D>("L2");
            picL3 = Content.Load<Texture2D>("L3");

            setPicGameLv();//匯入關卡圖片初始化
            menu = new menu();
            base.Initialize();
        }

        /// <summary>
        /// 每次遊戲都會呼叫 LoadContent 一次，這是載入所有內容
        /// 的地方。
        /// </summary>
        protected override void LoadContent()
        {
            // 建立可用來繪製紋理的新 SpriteBatch。
            P = new SpriteBatch(GraphicsDevice);

            // TODO: 在此使用 this.Content 來載入遊戲內容
        }

        /// <summary>
        /// 每次遊戲都會呼叫 UnloadContent 一次，這是解除載入
        /// 所有內容的地方。
        /// </summary>
        protected override void UnloadContent()
        {
            // TODO: 在此解除載入任何非 ContentManager 內容
        }

        /// <summary>
        /// 允許遊戲執行如更新世界、
        /// 檢查衝突、收集輸入和播放音訊的邏輯。
        /// </summary>
        /// <param name="gameTime">提供時間值的快照。</param>
        protected override void Update(GameTime gameTime)
        {
            if (GameState==-1)
            {
                this.Exit();
            }

            // 允許遊戲結束
            if (GamePad.GetState(PlayerIndex.One).Buttons.Back == ButtonState.Pressed)
            {
                if (GameState > -1)
                {
                    if (GameState==2)
                    {
                        Game.save();

                    }

                    if (GameState < 10)
                    {
                        GameState--;
                    }
                    else
                    {
                        //排行榜
                        if (GameState==10)
                        {
                            GameState = 0;
                        }


                        //球體
                        if (GameState == 11)
                        {
                            GameState = 0;
                        }

                        //解鎖條件
                        if (GameState == 12)
                        {
                            GameState = 11;
                        }
                    }
                }
            }


            touchState = TouchPanel.GetState();

            // 0=選單menu,1=選取關卡GameLv,2=開始遊戲
            if (GameState == 0)
            {
                gamelv = null;//必須在update之前
                Game = null;//必須在update之前
                //------------
                menu.UPDATE();
            }
            else if (GameState == 1)
            {
                Game = null;//必須在update之前

                if (gamelv==null)
                {
                    gamelv = new GameLv();
                }

                gamelv.UPDATE();
            }
            else if (GameState == 2)
            {
                gamelv = null;//必須在update之前
                Game.UPDATE();
            }else if(GameState == 10){
                board.UPDATE();
            }
            else if (GameState == 11)
            {
                changeBall.UPDATE();
            }


            base.Update(gameTime);
        }

        /// <summary>
        /// 當遊戲應該自我繪製時會呼叫此項目。
        /// </summary>
        /// <param name="gameTime">提供時間值的快照。</param>
        protected override void Draw(GameTime gameTime)
        {
            GraphicsDevice.Clear(Color.White);

            Game1.P.Begin();
            if (GameState == 0)
            {
                menu.Draw();
            }else if(GameState == 1){
                gamelv.Draw();
            }else if(GameState == 2){
                Game.Draw();
            }
            else if (GameState == 10)
            {
                //排行榜
                board.Draw();
            }
            else if (GameState == 11)
            {
                //球體設定
                changeBall.Draw();
            }
            else if (GameState == 12)
            {
                //解鎖說明
                INFOV.Draw();
            }


            Game1.P.End();
            base.Draw(gameTime);
        }



        void setPicGameLv(){
         for (int i = 0; i < picGameLv.Count();i++ )
         {
             picGameLv[i] = Content.Load<Texture2D>("lv"+(i + 1).ToString());
             picGameLv2[i] = Content.Load<Texture2D>("k" +(i + 1).ToString());
         }
        }
    }
}
