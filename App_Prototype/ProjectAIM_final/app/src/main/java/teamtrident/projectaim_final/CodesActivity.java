package teamtrident.projectaim_final;


import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.PopupWindow;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;

public class CodesActivity extends AppCompatActivity {

    ArrayList<String> titles;
    ArrayList<String> descs;
    Button btn;
    String selectedTitle;
    String selectedDesc;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_codes);

        btn = (Button)findViewById(R.id.btnBack);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(CodesActivity.this, UserActivity.class));
            }
        });

        ListView moviesList=(ListView)findViewById(R.id.lvCodes);

        titles = new ArrayList<String>();
        descs = new ArrayList<String>();
        getMovies();
        getMovies2();

        ArrayAdapter<String> arrayAdapter =
                new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1, titles);

        moviesList.setAdapter(arrayAdapter);

        moviesList.setOnItemClickListener(new AdapterView.OnItemClickListener()
        {
            public void onItemClick(AdapterView<?> arg0, View v, int position, long arg3)
            {
                selectedTitle=titles.get(position);
                selectedDesc = descs.get(position);

                Intent intent = new Intent(CodesActivity.this, Pop.class);
                intent.putExtra("TITLE", selectedTitle);
                intent.putExtra("DESCR", selectedDesc);
                startActivity(intent);
            }
        });
    }

    void getMovies()
    {
        titles.add("Local Butchers");
        titles.add("Bakery");
        titles.add("Greengrocers");

    }

    void getMovies2()
    {
        descs.add("30% off all beef cuts \n Location...");
        descs.add("Buy one loaf get one free! Next 20 mins! \n Location...");
        descs.add("All stock must go 60% off! \n Location...");

    }
}
