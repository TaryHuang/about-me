using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
namespace hero
{
    interface ball_IF
    {
        BoundingSphere H { get; }
        BoundingSphere[] H3 { get; }
        void Draw(SpriteBatch P);
        bool life();
        void update();
        bool deleteBall(bool[] BL);

    }
}
