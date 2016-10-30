package teamtrident.projectaim_final;


import android.app.Notification;
import android.app.NotificationManager;
import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.RequiresApi;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class UserActivity extends AppCompatActivity {

    Button btn;
    Button btnEn;

    TextView tvLat;
    TextView tvLong;
    TextView tvLocLat;
    TextView tvLocLong;

    TextView tvtitle2;
    TextView tvdesc2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user);

        btn = (Button)findViewById(R.id.btnCodes);
        btnEn = (Button)findViewById(R.id.btnGPS);

        tvLat =(TextView)findViewById(R.id.tvLat);
        tvLong =(TextView)findViewById(R.id.tvLong);
        tvLocLat =(TextView)findViewById(R.id.tvLocLat);
        tvLocLong =(TextView)findViewById(R.id.tvLocLong);

        tvtitle2 =(TextView)findViewById(R.id.tvtitle2);
        tvdesc2 =(TextView)findViewById(R.id.tvdesc2);

        tvLat.setText("Latitude");
        tvLong.setText("Longitude");

        tvLocLat.setText("-27.496977");
        tvLocLong.setText("153.013136");

        tvtitle2.setText("Local Butchers");
        tvdesc2.setText("30% off all Beef products in the next 20 minutes! \n Location....");

        tvLat.setVisibility(View.INVISIBLE);
        tvLong.setVisibility(View.INVISIBLE);
        tvLocLat.setVisibility(View.INVISIBLE);
        tvLocLong.setVisibility(View.INVISIBLE);

        tvtitle2.setVisibility(View.INVISIBLE);
        tvdesc2.setVisibility(View.INVISIBLE);



        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(UserActivity.this, CodesActivity.class));
            }
        });

        btnEn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                tvLat.setVisibility(View.VISIBLE);
                tvLong.setVisibility(View.VISIBLE);
                tvLocLat.setVisibility(View.VISIBLE);
                tvLocLong.setVisibility(View.VISIBLE);

                tvtitle2.setVisibility(View.VISIBLE);
                tvdesc2.setVisibility(View.VISIBLE);

                getNotif();
            }
        });
    }

    @RequiresApi(api = Build.VERSION_CODES.JELLY_BEAN)
    public void getNotif(){
        NotificationManager notificationmgr = (NotificationManager)getSystemService(NOTIFICATION_SERVICE);

        Notification notif = new Notification.Builder(getApplicationContext())
                .setSmallIcon(R.mipmap.ic_launcher)

                .setContentTitle("Local Butchers")
                .setContentText("30% off all Beef products in the next 20 minutes!")
                .build();

        notificationmgr.notify(0,notif);
    }

}
