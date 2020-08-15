using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Input.Touch;

namespace BOBO
{
    class menu
    {

        touch start;
        touch exit;
        touch board;
        touch changeBall;//更換球
        TouchLocation touchLocation;
        public menu()
        {
            start = new touch(Game1.picStart, new Vector2(290, 100));
            board = new touch(Game1.picBoard, new Vector2(290, 190));

            changeBall = new touch(Game1.picChangeBall, new Vector2(290, 280));

            exit = new touch(Game1.picExit, new Vector2(290, 370));
        }








        public void UPDATE()
        {
            
            for (int i = 0; i < Game1.touchState.Count; i++)
            {
                touchLocation = Game1.touchState[i];


                if (Game1.touchState[i].State == TouchLocationState.Released)
                {
                    if (board.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                    {
                        Game1.GameState = 10;
                        Game1.board = null;
                        Game1.board = new Board();
                        return;
                    }


                    if (exit.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                    {
                        Game1.GameState = -1;
                        return;
                    }

                    if (start.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                    {
                        Game1.gamelv = new GameLv();
                        Game1.GameState = 1;
                        return;
                    }


                    if (changeBall.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                    {
                        Game1.GameState = 11;//換球
                        Game1.changeBall = null;
                        Game1.changeBall = new changeball();

                        return;
                    }
                }//if



            }//for
        }


        //遊戲選單介面
        public void Draw()
        {
            Game1.P.Draw(Game1.picBG, new Vector2(0, 0), Color.White);

            start.Draw();
            board.Draw();
            changeBall.Draw();
            exit.Draw();
        }

    }
}
